<?php /** @noinspection MultiAssignmentUsageInspection */

namespace Shuchkin;
use SimpleXMLElement;

/**
 *    SimpleXLSX php class
 *    MS Excel 2007 workbooks reader
 *
 * Copyright (c) 2012 - 2022 SimpleXLSX
 *
 * @category   SimpleXLSX
 * @package    SimpleXLSX
 * @copyright  Copyright (c) 2012 - 2022 SimpleXLSX (https://github.com/shuchkin/simplexlsx/)
 * @license    MIT
 */

/** Examples
 *
 * use Shuchkin\SimpleXLSX;
 *
 * Example 1:
 * if ( $xlsx = SimpleXLSX::parse('book.xlsx') ) {
 *   print_r( $xlsx->rows() );
 * } else {
 *   echo SimpleXLSX::parseError();
 * }
 *
 * Example 2: html table
 * if ( $xlsx = SimpleXLSX::parse('book.xlsx') ) {
 *   echo $xlsx->toHTML();
 * } else {
 *   echo SimpleXLSX::parseError();
 * }
 *
 * Example 3: rowsEx
 * $xlsx = SimpleXLSX::parse('book.xlsx');
 * print_r( $xlsx->rowsEx() );
 *
 * Example 4: select worksheet
 * $xlsx = SimpleXLSX::parse('book.xlsx');
 * print_r( $xlsx->rows(1) ); // second worksheet
 *
 * Example 5: IDs and worksheet names
 * $xlsx = SimpleXLSX::parse('book.xlsx');
 * print_r( $xlsx->sheetNames() ); // array( 0 => 'Sheet 1', 1 => 'Catalog' );
 *
 * Example 6: get sheet name by index
 * $xlsx = SimpleXLSX::parse('book.xlsx');
 * echo 'Sheet Name 2 = '.$xlsx->sheetName(1);
 *
 * Example 7: getCell (very slow)
 * echo $xlsx->getCell(1,'D12'); // reads D12 cell from second sheet
 *
 * Example 8: read data
 * if ( $xlsx = SimpleXLSX::parseData( file_get_contents('http://www.example.com/example.xlsx') ) ) {
 *   $dim = $xlsx->dimension(1);
 *   $num_cols = $dim[0];
 *   $num_rows = $dim[1];
 *   echo $xlsx->sheetName(1).':'.$num_cols.'x'.$num_rows;
 * } else {
 *   echo SimpleXLSX::parseError();
 * }
 *
 * Example 9: old style
 * $xlsx = new SimpleXLSX('book.xlsx');
 * if ( $xlsx->success() ) {
 *   print_r( $xlsx->rows() );
 * } else {
 *   echo 'xlsx error: '.$xlsx->error();
 * }
 */

class SimpleXLSX {
    // Don't remove this string! Created by Sergey Shuchkin sergey.shuchkin@gmail.com
    public static $CF = array( // Cell formats
        0  => 'General',
        1  => '0',
        2  => '0.00',
        3  => '#,##0',
        4  => '#,##0.00',
        9  => '0%',
        10 => '0.00%',
        11 => '0.00E+00',
        12 => '# ?/?',
        13 => '# ??/??',
        14 => 'mm-dd-yy',
        15 => 'd-mmm-yy',
        16 => 'd-mmm',
        17 => 'mmm-yy',
        18 => 'h:mm AM/PM',
        19 => 'h:mm:ss AM/PM',
        20 => 'h:mm',
        21 => 'h:mm:ss',
        22 => 'm/d/yy h:mm',

        37 => '#,##0 ;(#,##0)',
        38 => '#,##0 ;[Red](#,##0)',
        39 => '#,##0.00;(#,##0.00)',
        40 => '#,##0.00;[Red](#,##0.00)',

        44 => '_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)',
        45 => 'mm:ss',
        46 => '[h]:mm:ss',
        47 => 'mmss.0',
        48 => '##0.0E+0',
        49 => '@',

        27 => '[$-404]e/m/d',
        30 => 'm/d/yy',
        36 => '[$-404]e/m/d',
        50 => '[$-404]e/m/d',
        57 => '[$-404]e/m/d',

        59 => 't0',
        60 => 't0.00',
        61 => 't#,##0',
        62 => 't#,##0.00',
        67 => 't0%',
        68 => 't0.00%',
        69 => 't# ?/?',
        70 => 't# ??/??',
    );
    public $cellFormats = array();
    public $datetimeFormat = 'Y-m-d H:i:s';
    public $debug;
    public $activeSheet = 0;

    /* @var SimpleXMLElement[] $sheets */
    protected $sheets;
    protected $sheetNames = array();
    protected $sheetFiles = array();
    // scheme
    protected $styles;
    protected $hyperlinks;
    /* @var array[] $package */
    protected $package;
    protected $sharedstrings;
    protected $date1904 = 0;


    /*
        private $date_formats = array(
            0xe => "d/m/Y",
            0xf => "d-M-Y",
            0x10 => "d-M",
            0x11 => "M-Y",
            0x12 => "h:i a",
            0x13 => "h:i:s a",
            0x14 => "H:i",
            0x15 => "H:i:s",
            0x16 => "d/m/Y H:i",
            0x2d => "i:s",
            0x2e => "H:i:s",
            0x2f => "i:s.S"
        );
        private $number_formats = array(
            0x1 => "%1.0f",     // "0"
            0x2 => "%1.2f",     // "0.00",
            0x3 => "%1.0f",     //"#,##0",
            0x4 => "%1.2f",     //"#,##0.00",
            0x5 => "%1.0f",     //"$#,##0;($#,##0)",
            0x6 => '$%1.0f',    //"$#,##0;($#,##0)",
            0x7 => '$%1.2f',    //"$#,##0.00;($#,##0.00)",
            0x8 => '$%1.2f',    //"$#,##0.00;($#,##0.00)",
            0x9 => '%1.0f%%',   //"0%"
            0xa => '%1.2f%%',   //"0.00%"
            0xb => '%1.2f',     //"0.00E00",
            0x25 => '%1.0f',    //"#,##0;(#,##0)",
            0x26 => '%1.0f',    //"#,##0;(#,##0)",
            0x27 => '%1.2f',    //"#,##0.00;(#,##0.00)",
            0x28 => '%1.2f',    //"#,##0.00;(#,##0.00)",
            0x29 => '%1.0f',    //"#,##0;(#,##0)",
            0x2a => '$%1.0f',   //"$#,##0;($#,##0)",
            0x2b => '%1.2f',    //"#,##0.00;(#,##0.00)",
            0x2c => '$%1.2f',   //"$#,##0.00;($#,##0.00)",
            0x30 => '%1.0f');   //"##0.0E0";
        // }}}
    */
    protected $errno = 0;
    protected $error = false;


    public function __construct( $filename = null, $is_data = null, $debug = null ) {
        if ( $debug !== null ) {
            $this->debug = $debug;
        }
        $this->package = array(
            'filename' => '',
            'mtime'    => 0,
            'size'     => 0,
            'comment'  => '',
            'entries'  => array()
        );
        if ( $filename && $this->_unzip( $filename, $is_data ) ) {
            $this->_parse();
        }
    }

    public static function parseFile( $filename, $debug = false ) {
        return self::parse( $filename, false, $debug );
    }

    public static function parseData( $data, $debug = false ) {
        return self::parse( $data, true, $debug );
    }

    public static function parse( $filename, $is_data = false, $debug = false ) {
        $xlsx        = new self();
        $xlsx->debug = $debug;
        if ( $xlsx->_unzip( $filename, $is_data ) ) {
            $xlsx->_parse();
        }
        if ( $xlsx->success() ) {
            return $xlsx;
        }
        self::parseError( $xlsx->error() );
        self::parseErrno( $xlsx->errno() );

        return false;
    }

    public static function parseError( $set = false ) {
        static $error = false;

        return $set ? $error = $set : $error;
    }

    public static function parseErrno( $set = false ) {
        static $errno = false;

        return $set ? $errno = $set : $errno;
    }

    protected function _unzip( $filename, $is_data = false ) {

        if ( $is_data ) {

            $this->package['filename'] = 'default.xlsx';
            $this->package['mtime']    = time();
            $this->package['size']     = $this->_strlen( $filename );

            $vZ = $filename;
        } else {

            if ( ! is_readable( $filename ) ) {
                $this->error( 1, 'File not found ' . $filename );

                return false;
            }

            // Package information
            $this->package['filename'] = $filename;
            $this->package['mtime']    = filemtime( $filename );
            $this->package['size']     = filesize( $filename );

            // Read file
            $vZ = file_get_contents( $filename );
        }
        // Cut end of central directory
        /*		$aE = explode("\x50\x4b\x05\x06", $vZ);
                if (count($aE) == 1) {
                    $this->error('Unknown format');
                    return false;
                }
        */
        // Explode to each part
        $aE = explode( "\x50\x4b\x03\x04", $vZ );
        array_shift( $aE );

        $aEL = count( $aE );
        if ( $aEL === 0 ) {
            $this->error( 2, 'Unknown archive format' );

            return false;
        }
        // Search central directory end record
        $last = $aE[ $aEL - 1 ];
        $last = explode( "\x50\x4b\x05\x06", $last );
        if ( count( $last ) !== 2 ) {
            $this->error( 2, 'Unknown archive format' );

            return false;
        }
        // Search central directory
        $last = explode( "\x50\x4b\x01\x02", $last[0] );
        if ( count( $last ) < 2 ) {
            $this->error( 2, 'Unknown archive format' );

            return false;
        }
        $aE[ $aEL - 1 ] = $last[0];

        // Loop through the entries
        foreach ( $aE as $vZ ) {
            $aI       = array();
            $aI['E']  = 0;
            $aI['EM'] = '';
            // Retrieving local file header information
//			$aP = unpack('v1VN/v1GPF/v1CM/v1FT/v1FD/V1CRC/V1CS/V1UCS/v1FNL', $vZ);
            $aP = unpack( 'v1VN/v1GPF/v1CM/v1FT/v1FD/V1CRC/V1CS/V1UCS/v1FNL/v1EFL', $vZ );

            // Check if data is encrypted
//			$bE = ($aP['GPF'] && 0x0001) ? TRUE : FALSE;
//			$bE = false;
            $nF = $aP['FNL'];
            $mF = $aP['EFL'];

            // Special case : value block after the compressed data
            if ( $aP['GPF'] & 0x0008 ) {
                $aP1 = unpack( 'V1CRC/V1CS/V1UCS', $this->_substr( $vZ, - 12 ) );

                $aP['CRC'] = $aP1['CRC'];
                $aP['CS']  = $aP1['CS'];
                $aP['UCS'] = $aP1['UCS'];
                // 2013-08-10
                $vZ = $this->_substr( $vZ, 0, - 12 );
                if ( $this->_substr( $vZ, - 4 ) === "\x50\x4b\x07\x08" ) {
                    $vZ = $this->_substr( $vZ, 0, - 4 );
                }
            }

            // Getting stored filename
            $aI['N'] = $this->_substr( $vZ, 26, $nF );
            $aI['N'] = str_replace( '\\', '/', $aI['N'] );

            if ( $this->_substr( $aI['N'], - 1 ) === '/' ) {
                // is a directory entry - will be skipped
                continue;
            }

            // Truncate full filename in path and filename
            $aI['P'] = dirname( $aI['N'] );
            $aI['P'] = ( $aI['P'] === '.' ) ? '' : $aI['P'];
            $aI['N'] = basename( $aI['N'] );

            $vZ = $this->_substr( $vZ, 26 + $nF + $mF );

            if ( $this->_strlen( $vZ ) !== (int) $aP['CS'] ) { // check only if availabled
                $aI['E']  = 1;
                $aI['EM'] = 'Compressed size is not equal with the value in header information.';
//			} elseif ( $bE ) {
//				$aI['E']  = 5;
//				$aI['EM'] = 'File is encrypted, which is not supported from this class.';
            } else {
                switch ( $aP['CM'] ) {
                    case 0: // Stored
                        // Here is nothing to do, the file ist flat.
                        break;
                    case 8: // Deflated
                        $vZ = gzinflate( $vZ );
                        break;
                    case 12: // BZIP2
                        if ( extension_loaded( 'bz2' ) ) {
                            $vZ = bzdecompress( $vZ );
                        } else {
                            $aI['E']  = 7;
                            $aI['EM'] = 'PHP BZIP2 extension not available.';
                        }
                        break;
                    default:
                        $aI['E']  = 6;
                        $aI['EM'] = "De-/Compression method {$aP['CM']} is not supported.";
                }
                if ( ! $aI['E'] ) {
                    if ( $vZ === false ) {
                        $aI['E']  = 2;
                        $aI['EM'] = 'Decompression of data failed.';
                    } elseif ( $this->_strlen( $vZ ) !== (int) $aP['UCS'] ) {
                        $aI['E']  = 3;
                        $aI['EM'] = 'Uncompressed size is not equal with the value in header information.';
                    } elseif ( crc32( $vZ ) !== $aP['CRC'] ) {
                        $aI['E']  = 4;
                        $aI['EM'] = 'CRC32 checksum is not equal with the value in header information.';
                    }
                }
            }

            $aI['D'] = $vZ;

            // DOS to UNIX timestamp
            $aI['T'] = mktime( ( $aP['FT'] & 0xf800 ) >> 11,
                ( $aP['FT'] & 0x07e0 ) >> 5,
                ( $aP['FT'] & 0x001f ) << 1,
                ( $aP['FD'] & 0x01e0 ) >> 5,
                $aP['FD'] & 0x001f,
                ( ( $aP['FD'] & 0xfe00 ) >> 9 ) + 1980 );

            //$this->Entries[] = &new SimpleUnzipEntry($aI);
            $this->package['entries'][] = array(
                'data'      => $aI['D'],
                'error'     => $aI['E'],
                'error_msg' => $aI['EM'],
                'name'      => $aI['N'],
                'path'      => $aI['P'],
                'time'      => $aI['T']
            );

        } // end for each entries

        return true;
    }

    // sheets numeration: 1,2,3....

    public function error( $num = null, $str = null ) {
        if ( $num ) {
            $this->errno = $num;
            $this->error = $str;
            if ( $this->debug ) {
                trigger_error( __CLASS__ . ': ' . $this->error, E_USER_WARNING );
            }
        }

        return $this->error;
    }

    public function errno() {
        return $this->errno;
    }

    protected function _parse() {
        // Document data holders
        $this->sharedstrings = array();
        $this->sheets        = array();
//		$this->styles = array();

        // Read relations and search for officeDocument
        if ( $relations = $this->getEntryXML( '_rels/.rels' ) ) {

            foreach ( $relations->Relationship as $rel ) {

                $rel_type   = basename( trim( (string) $rel['Type'] ) ); // officeDocument
                $rel_target = $this->_getTarget( '', (string) $rel['Target'] ); // /xl/workbook.xml or xl/workbook.xml

                if ( $rel_type === 'officeDocument' && $workbook = $this->getEntryXML( $rel_target ) ) {

                    $index_rId = array(); // [0 => rId1]

                    $index = 0;
                    foreach ( $workbook->sheets->sheet as $s ) {
                        $this->sheetNames[ $index ] = (string) $s['name'];
                        $index_rId[ $index ]        = (string) $s['id'];
                        $index ++;
                    }
                    if ( (int) $workbook->workbookPr['date1904'] === 1 ) {
                        $this->date1904 = 1;
                    }


                    if ( $workbookRelations = $this->getEntryXML( dirname( $rel_target ) . '/_rels/workbook.xml.rels' ) ) {

                        // Loop relations for workbook and extract sheets...
                        foreach ( $workbookRelations->Relationship as $workbookRelation ) {

                            $wrel_type = basename( trim( (string) $workbookRelation['Type'] ) );
                            $wrel_path = $this->_getTarget( dirname( $rel_target ), (string) $workbookRelation['Target'] );
                            if ( ! $this->entryExists( $wrel_path ) ) {
                                continue;
                            }


                            if ( $wrel_type === 'worksheet' ) { // Sheets

                                if ( $sheet = $this->getEntryXML( $wrel_path ) ) {
                                    $index                  = array_search( (string) $workbookRelation['Id'], $index_rId, true );
                                    $this->sheets[ $index ] = $sheet;
                                    $this->sheetFiles[ $index ] = $wrel_path;
                                }

                            } elseif ( $wrel_type === 'sharedStrings' ) {

                                if ( $sharedStrings = $this->getEntryXML( $wrel_path ) ) {
                                    foreach ( $sharedStrings->si as $val ) {
                                        if ( isset( $val->t ) ) {
                                            $this->sharedstrings[] = (string) $val->t;
                                        } elseif ( isset( $val->r ) ) {
                                            $this->sharedstrings[] = $this->_parseRichText( $val );
                                        }
                                    }
                                }
                            } elseif ( $wrel_type === 'styles' ) {

                                $this->styles = $this->getEntryXML( $wrel_path );

                                $nf = array();
                                if ( $this->styles->numFmts->numFmt !== null ) {
                                    foreach ( $this->styles->numFmts->numFmt as $v ) {
                                        $nf[ (int) $v['numFmtId'] ] = (string) $v['formatCode'];
                                    }
                                }

                                if ( $this->styles->cellXfs->xf !== null ) {
                                    foreach ( $this->styles->cellXfs->xf as $v ) {
                                        $v           = (array) $v->attributes();
                                        $v['format'] = '';

                                        if ( isset( $v['@attributes']['numFmtId'] ) ) {
                                            $v   = $v['@attributes'];
                                            $fid = (int) $v['numFmtId'];
                                            // formats priority
                                            if ( isset( $nf[ $fid ] ) ) {
                                                $v['format'] = $nf[ $fid ];
                                            } elseif ( isset( self::$CF[ $fid ] ) ) {
                                                $v['format'] = self::$CF[ $fid ];
                                            }
                                        }
                                        $this->cellFormats[] = $v;
                                    }
                                }
                            }
                        }

                        break;
                    }
                    // reptile hack :: find active sheet from workbook.xml
                    foreach ( $workbook->bookViews->workbookView  as $s ) {
                        if ( !empty($s['activeTab'])) {
                            $this->activeSheet = (int) $s['activeTab'];
                        }
                    }
                }
            }
        }
        if ( count( $this->sheets ) ) {
            // Sort sheets
            ksort( $this->sheets );

            return true;
        }

        return false;
    }

    /*
     * @param string $name Filename in archive
     * @return SimpleXMLElement|bool
    */
    public function getEntryXML( $name ) {
        if ( $entry_xml = $this->getEntryData( $name ) ) {

            // dirty remove namespace prefixes and empty rows
            $entry_xml = preg_replace( '/xmlns[^=]*="[^"]*"/i', '', $entry_xml ); // remove namespaces
            $entry_xml .= ' '; // force run garbage collector
            $entry_xml = preg_replace( '/[a-zA-Z0-9]+:([a-zA-Z0-9]+="[^"]+")/', '$1', $entry_xml ); // remove namespaced
            $entry_xml .= ' ';
            $entry_xml = preg_replace( '/<[a-zA-Z0-9]+:([^>]+)>/', '<$1>', $entry_xml ); // fix namespaced openned tags
            $entry_xml .= ' ';
            $entry_xml = preg_replace( '/<\/[a-zA-Z0-9]+:([^>]+)>/', '</$1>', $entry_xml ); // fix namespaced closed tags
            $entry_xml .= ' ';

            if ( strpos( $name, '/sheet' ) ) { // dirty skip empty rows
                 // remove <row...> <c /><c /></row>
                $entry_xml = preg_replace( '/<row[^>]+>\s*(<c[^\/]+\/>\s*)+<\/row>/', '', $entry_xml, - 1, $cnt );
                $entry_xml .= ' ';
                // remove <row />
                $entry_xml = preg_replace( '/<row[^\/>]*\/>/', '', $entry_xml, - 1, $cnt2 );
                $entry_xml .= ' ';
                // remove <row...></row>
                $entry_xml = preg_replace( '/<row[^>]*><\/row>/', '', $entry_xml, - 1, $cnt3 );
                $entry_xml .= ' ';
                if ( $cnt || $cnt2 || $cnt3 ) {
                    $entry_xml = preg_replace( '/<dimension[^\/]+\/>/', '', $entry_xml );
                    $entry_xml .= ' ';
                }
//				file_put_contents( basename( $name ), $entry_xml ); // @to do comment!!!
            }
            $entry_xml = trim( $entry_xml );
            // XML External Entity (XXE) Prevention, libxml_disable_entity_loader deprecated in PHP 8
            if ( LIBXML_VERSION < 20900 && function_exists('libxml_disable_entity_loader') ) {
                $_old = libxml_disable_entity_loader();
            }

            $_old_uie = libxml_use_internal_errors(true);

            $entry_xmlobj = simplexml_load_string( $entry_xml, 'SimpleXMLElement', LIBXML_COMPACT | LIBXML_PARSEHUGE );

            libxml_use_internal_errors( $_old_uie );

            if ( LIBXML_VERSION < 20900 && function_exists('libxml_disable_entity_loader')) {
                /** @noinspection PhpUndefinedVariableInspection */
                libxml_disable_entity_loader( $_old );
            }

            if ( $entry_xmlobj ) {
                return $entry_xmlobj;
            }
            $e = libxml_get_last_error();
            if ( $e ) {
                $this->error( 3, 'XML-entry ' . $name . ' parser error ' . $e->message . ' line ' . $e->line );
            }
        } else {
            $this->error( 4, 'XML-entry not found ' . $name );
        }

        return false;
    }

    public function getEntryData( $name ) {
        $name = ltrim( str_replace( '\\', '/', $name ), '/' );
        $dir  = $this->_strtoupper( dirname( $name ) );
        $name = $this->_strtoupper( basename( $name ) );
        foreach ( $this->package['entries'] as $entry ) {
            if ( $this->_strtoupper( $entry['path'] ) === $dir && $this->_strtoupper( $entry['name'] ) === $name ) {
                return $entry['data'];
            }
        }
        $this->error( 5, 'Entry not found ' . ( $dir ? $dir . '/' : '' ) . $name );

        return false;
    }

    public function entryExists( $name ) { // 0.6.6
        $dir  = $this->_strtoupper( dirname( $name ) );
        $name = $this->_strtoupper( basename( $name ) );
        foreach ( $this->package['entries'] as $entry ) {
            if ( $this->_strtoupper( $entry['path'] ) === $dir && $this->_strtoupper( $entry['name'] ) === $name ) {
                return true;
            }
        }

        return false;
    }

    public function success() {
        return ! $this->error;
    }

    public function rows( $worksheetIndex = 0, $limit = 0 ) {

        if ( ( $ws = $this->worksheet( $worksheetIndex ) ) === false ) {
            return false;
        }
        $dim     = $this->dimension( $worksheetIndex );
        $numCols = $dim[0];
        $numRows = $dim[1];

        $emptyRow = array();
        for ( $i = 0; $i < $numCols; $i ++ ) {
            $emptyRow[] = '';
        }

        $rows = array();
        $_limit = $limit;
        for ( $i = 0; $i < $numRows; $i ++ ) {
            $rows[] = $emptyRow;
            $_limit--;
            if ( $_limit === 0 ) {
                break;
            }
        }

        $curR = 0;
        $_limit = $limit;
        /* @var SimpleXMLElement $ws */
        foreach ( $ws->sheetData->row as $row ) {
            $curC = 0;
            foreach ( $row->c as $c ) {
                // detect skipped cols
                $idx = $this->getIndex( (string) $c['r'] );
                $x   = $idx[0];
                $y   = $idx[1];

                if ( $x > - 1 ) {
                    $curC = $x;
                    $curR = $y;
                }

                $rows[ $curR ][ $curC ] = $this->value( $c );
                $curC ++;
            }

            $curR ++;
            $_limit--;
            if ( $_limit === 0 ) {
                break;
            }
        }

        return $rows;
    }
    // https://github.com/shuchkin/simplexlsx#gets-extend-cell-info-by--rowsex
    public function rowsEx( $worksheetIndex = 0, $limit = 0 ) {

        if ( ( $ws = $this->worksheet( $worksheetIndex ) ) === false ) {
            return false;
        }

        $rows = array();

        $dim     = $this->dimension( $worksheetIndex );
        $numCols = $dim[0];
        $numRows = $dim[1];

        $hiddenCols = array();
        /* @var SimpleXMLElement $ws */
        if ( isset( $ws->cols ) ) {
            foreach ( $ws->cols->col as $col ) {
                for ( $i = (int)$col['min']; $i <= (int)$col['max']; $i++ ) {
                    if ( $col['hidden'] ) {
                        $hiddenCols[] = $i - 1;
                    }
                }
            }
        }
        $_limit = $limit;
        for ( $y = 0; $y < $numRows; $y ++ ) {
            for ( $x = 0; $x < $numCols; $x ++ ) {
                // 0.6.8
                $c = '';
                for ( $k = $x; $k >= 0; $k = (int) ( $k / 26 ) - 1 ) {
                    $c = chr( $k % 26 + 65 ) . $c;
                }
                $rows[ $y ][ $x ] = array(
                    'type'   => '',
                    'name'   => $c . ( $y + 1 ),
                    'value'  => '',
                    'href'   => '',
                    'f'      => '',
                    'format' => '',
                    'r'      => $y,
                    'hidden'      => count($hiddenCols) && in_array($x, $hiddenCols, true )
                );
            }
            $_limit--;
            if ( $_limit === 0 ) {
                break;
            }
        }


        $curR = 0;
        $_limit = $limit;

        foreach ( $ws->sheetData->row as $row ) {

            $curC  = 0;

            $r_idx = (int) $row['r'];
            $r_hidden = (bool) $row['hidden'];

            foreach ( $row->c as $c ) {
                $r = (string) $c['r'];
                $t = (string) $c['t'];
                $s = (int) $c['s'];

                $idx = $this->getIndex( $r );
                $x   = $idx[0];
                $y   = $idx[1];

                if ( $x > - 1 ) {
                    $curC = $x;
                    $curR = $y;
                }

                if ( $s > 0 && isset( $this->cellFormats[ $s ] ) ) {
                    $format = $this->cellFormats[ $s ]['format'];
                } else {
                    $format = '';
                }
                $hidden = $r_hidden;
                if ( !$hidden && count($hiddenCols) && in_array($curC, $hiddenCols, true )) {
                    $hidden = true;
                }

                $rows[ $curR ][ $curC ] = array(
                    'type'   => $t,
                    'name'   => (string) $c['r'],
                    'value'  => $this->value( $c ),
                    'href'   => $this->href( $worksheetIndex, $c ),
                    'f'      => (string) $c->f,
                    'format' => $format,
                    'r'      => $r_idx,
                    'hidden' => $hidden,
                );
                $curC ++;
            }
            $curR ++;
            $_limit--;
            if ( $_limit === 0 ) {
                break;
            }
        }

        return $rows;

    }

    public function toHTML( $worksheetIndex = 0 ) {
        $s = '<table class=excel>';
        foreach ( $this->rows( $worksheetIndex ) as $r ) {
            $s .= '<tr>';
            foreach ( $r as $c ) {
                $s .= '<td nowrap>' . ( $c === '' ? '&nbsp' : htmlspecialchars( $c, ENT_QUOTES ) ) . '</td>';
            }
            $s .= "</tr>\r\n";
        }
        $s .= '</table>';

        return $s;
    }

    public function worksheet( $worksheetIndex = 0 ) {


        if ( isset( $this->sheets[ $worksheetIndex ] ) ) {
            $ws = $this->sheets[ $worksheetIndex ];

            if ( !isset($this->hyperlinks[ $worksheetIndex ]) && isset( $ws->hyperlinks ) ) {
                $this->hyperlinks[ $worksheetIndex ] = array();
                $sheet_rels = str_replace('worksheets','worksheets/_rels', $this->sheetFiles[$worksheetIndex]).'.rels';
                $link_ids = array();

                if ( $rels = $this->getEntryXML( $sheet_rels ) ) {
                    // hyperlink
//					$rel_base = dirname( $sheet_rels );
                    foreach ( $rels->Relationship as $rel ) {
                        $rel_type = basename( trim( (string)$rel['Type'] ) );
                        if ( $rel_type === 'hyperlink' ) {
                            $rel_id = (string)$rel['Id'];
                            $rel_target = (string)$rel['Target'];
                            $link_ids[ $rel_id ] = $rel_target;
                        }
                    }
                }
                foreach ( $ws->hyperlinks->hyperlink as $hyperlink ) {
                    $ref = (string) $hyperlink['ref'];
                    if ( $this->_strpos($ref,':') > 0 ) { // A1:A8 -> A1
                        $ref = explode(':', $ref);
                        $ref = $ref[0];
                    }
//						$this->hyperlinks[ $worksheetIndex ][ $ref ] = (string) $hyperlink['display'];
                    $loc = (string) $hyperlink['location'];
                    $id = (string) $hyperlink['id'];
                    if ( $id ) {
                        $href = $link_ids[ $id ] . ( $loc ? '#' . $loc : '');
                    } else {
                        $href = $loc;
                    }
                    $this->hyperlinks[ $worksheetIndex ][ $ref ] = $href;
                }
            }

            return $ws;
        }
        $this->error( 6, 'Worksheet not found ' . $worksheetIndex );

        return false;
    }

    /**
     * returns [numCols,numRows] of worksheet
     *
     * @param int $worksheetIndex
     *
     * @return array
     */
    public function dimension( $worksheetIndex = 0 ) {

        if ( ( $ws = $this->worksheet( $worksheetIndex ) ) === false ) {
            return array( 0, 0 );
        }
        /* @var SimpleXMLElement $ws */

        $ref = (string) $ws->dimension['ref'];

        if ( $this->_strpos( $ref, ':' ) !== false ) {
            $d   = explode( ':', $ref );
            $idx = $this->getIndex( $d[1] );

            return array( $idx[0] + 1, $idx[1] + 1 );
        }
        /*
        if ( $ref !== '' ) { // 0.6.8
            $index = $this->getIndex( $ref );
            return [ $index[0] + 1, $index[1] + 1 ];
        }
        */

        // slow method
        $maxC = $maxR = 0;
        foreach ( $ws->sheetData->row as $row ) {
            foreach ( $row->c as $c ) {
                $idx = $this->getIndex( (string) $c['r'] );
                $x   = $idx[0];
                $y   = $idx[1];
                if ( $x > 0 ) {
                    if ( $x > $maxC ) {
                        $maxC = $x;
                    }
                    if ( $y > $maxR ) {
                        $maxR = $y;
                    }
                }
            }
        }

        return array( $maxC + 1, $maxR + 1 );
    }

    public function getIndex( $cell = 'A1' ) {

        if ( preg_match( '/([A-Z]+)(\d+)/', $cell, $m ) ) {
            $col = $m[1];
            $row = $m[2];

            $colLen = $this->_strlen( $col );
            $index  = 0;

            for ( $i = $colLen - 1; $i >= 0; $i -- ) {
                $index += ( ord( $col[ $i ] ) - 64 ) * pow( 26, $colLen - $i - 1 );
            }

            return array( $index - 1, $row - 1 );
        }

//		$this->error( 'Invalid cell index ' . $cell );

        return array( - 1, - 1 );
    }

    public function value( $cell ) {
        // Determine data type
        $dataType = (string) $cell['t'];

        if ( $dataType === '' || $dataType === 'n' ) { // number
            $s = (int) $cell['s'];
            if ( $s > 0 && isset( $this->cellFormats[ $s ] ) ) {
                if (array_key_exists('format', $this->cellFormats[ $s ])) {
                    $format = $this->cellFormats[ $s ]['format'];
                    if ( preg_match( '/(m|AM|PM)/', preg_replace('/\"[^"]+\"/','', $format) ) ) { // [mm]onth,AM|PM
                        $dataType = 'D';
                    }
                }
                else {
                    $dataType = 'n';
                }
            }
        }

        $value = '';

        switch ( $dataType ) {
            case 's':
                // Value is a shared string
                if ( (string) $cell->v !== '' ) {
                    $value = $this->sharedstrings[ (int) $cell->v ];
                }
                break;

            case 'str': // formula?
                if ( (string) $cell->v !== '' ) {
                    $value = (string) $cell->v;
                }
                break;

            case 'b':
                // Value is boolean
                $value = (string) $cell->v;
                if ( $value === '0' ) {
                    $value = false;
                } elseif ( $value === '1' ) {
                    $value = true;
                } else {
                    $value = (bool) $cell->v;
                }

                break;

            case 'inlineStr':
                // Value is rich text inline
                $value = $this->_parseRichText( $cell->is );

                break;

            case 'e':
                // Value is an error message
                if ( (string) $cell->v !== '' ) {
                    $value = (string) $cell->v;
                }
                break;

            case 'D':
                // Date as float
                if ( ! empty( $cell->v ) ) {
                    $value = $this->datetimeFormat ? gmdate( $this->datetimeFormat, $this->unixstamp( (float) $cell->v ) ) : (float) $cell->v;
                }
                break;

            case 'd':
                // Date as ISO YYYY-MM-DD
                if ( (string) $cell->v !== '' ) {
                    $value = (string) $cell->v;
                }
                break;

            default:
                // Value is a string
                $value = (string) $cell->v;

                // Check for numeric values
                if ( is_numeric( $value ) ) {
                    /** @noinspection TypeUnsafeComparisonInspection */
                    if ( $value == (int) $value ) {
                        $value = (int) $value;
                    } /** @noinspection TypeUnsafeComparisonInspection */ elseif ( $value == (float) $value ) {
                        $value = (float) $value;
                    }
                }
        }

        return $value;
    }

    public function unixstamp( $excelDateTime ) {

        $d = floor( $excelDateTime ); // days since 1900 or 1904
        $t = $excelDateTime - $d;

        if ( $this->date1904 ) {
            $d += 1462;
        }

        $t = ( abs( $d ) > 0 ) ? ( $d - 25569 ) * 86400 + round( $t * 86400 ) : round( $t * 86400 );

        return (int) $t;
    }

    /**
     * Returns cell value
     * VERY SLOW! Use ->rows() or ->rowsEx()
     *
     * @param int $worksheetIndex
     * @param string|array $cell ref or coords, D12 or [3,12]
     *
     * @return mixed Returns NULL if not found
     */
    public function getCell( $worksheetIndex = 0, $cell = 'A1' ) {

        if ( ( $ws = $this->worksheet( $worksheetIndex ) ) === false ) {
            return false;
        }
        if ( is_array( $cell )) {
            $cell = $this->_num2name($cell[0]).$cell[1];// [3,21] -> D21
        }
        if ( is_string( $cell ) ) {
            $result = $ws->sheetData->xpath( "row/c[@r='" . $cell . "']" );
            if ( count($result) ) {
                return $this->value( $result[0] );
            }
        }

        return null;
    }

    public function href( $worksheetIndex, $cell ) {
        $ref = (string) $cell['r'];
        return isset( $this->hyperlinks[ $worksheetIndex ][ $ref ] ) ? $this->hyperlinks[ $worksheetIndex ][ $ref ] : '';
    }

    public function sheets() {
        return $this->sheets;
    }

    public function sheetsCount() {
        return count( $this->sheets );
    }

    public function sheetName( $worksheetIndex ) {
        if ( isset( $this->sheetNames[ $worksheetIndex ] ) ) {
            return $this->sheetNames[ $worksheetIndex ];
        }

        return false;
    }

    public function sheetNames() {

        return $this->sheetNames;
    }

    // thx Gonzo

    public function getStyles() {
        return $this->styles;
    }

    public function getPackage() {
        return $this->package;
    }

    public function setDateTimeFormat( $value ) {
        $this->datetimeFormat = is_string( $value ) ? $value : false;
    }
    protected function _parseRichText( $is = null ) {
        $value = array();

        if ( isset( $is->t ) ) {
            $value[] = (string) $is->t;
        } elseif ( isset( $is->r ) ) {
            foreach ( $is->r as $run ) {
                $value[] = (string) $run->t;
            }
        }

        return implode( '', $value );
    }

    protected function _strlen( $str ) {
        return ( ini_get( 'mbstring.func_overload' ) & 2 ) ? mb_strlen( $str, '8bit' ) : strlen( $str );
    }

    protected function _strpos( $haystack, $needle, $offset = 0 ) {
        return ( ini_get( 'mbstring.func_overload' ) & 2 ) ? mb_strpos( $haystack, $needle, $offset, '8bit' ) : strpos( $haystack, $needle, $offset );
    }

    /*
        private function _strrpos( $haystack, $needle, $offset = 0 ) {
            return (ini_get('mbstring.func_overload') & 2) ? mb_strrpos( $haystack, $needle, $offset, '8bit') : strrpos($haystack, $needle, $offset);
        }*/
    protected function _strtoupper( $str ) {
        return ( ini_get( 'mbstring.func_overload' ) & 2 ) ? mb_strtoupper( $str, '8bit' ) : strtoupper( $str );
    }

    protected function _substr( $str, $start, $length = null ) {
        return ( ini_get( 'mbstring.func_overload' ) & 2 ) ? mb_substr( $str, $start, ( $length === null ) ? mb_strlen( $str, '8bit' ) : $length, '8bit' ) : substr( $str, $start, ( $length === null ) ? strlen( $str ) : $length );
    }

    protected function _getTarget( $base, $target ) {
        $target = trim( $target );
        if ( strpos( $target, '/' ) === 0 ) {
            return $this->_substr( $target, 1 );
        }
        $target = ( $base ? $base . '/' : '' ) . $target;
        // a/b/../c -> a/c
        $parts = explode( '/', $target );
        $abs   = array();
        foreach ( $parts as $p ) {
            if ( '.' === $p ) {
                continue;
            }
            if ( '..' === $p ) {
                array_pop( $abs );
            } else {
                $abs[] = $p;
            }
        }
        return implode( '/', $abs );
    }
    protected function _num2name($num) {
        $numeric = ($num - 1) % 26;
        $letter  = chr( 65 + $numeric );
        $num2    = (int) ( ($num-1) / 26 );
        if ( $num2 > 0 ) {
            return $this->_num2name( $num2 ) . $letter;
        }
        return $letter;
    }

}