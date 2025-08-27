<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barcodes extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('Ciqrcode');
    $this->load->library('Zend');

    $this->load->database();
  }

  public function index($id)
  {
    $data['title'] = " Barcode PHP CodeIgniter 3";
    $this->load->view('barcode/render', $data);
  }

  public function QRcode($kodenya)
  {
    //render  qr code dengan format gambar PNG
    QRcode::png(
      $kodenya,
      $outfile = false,
      $level = QR_ECLEVEL_H,
      $size  = 6,
      $margin = 2
    );
  }

  public function generate($id)
  {

    $this->load->model('Item');
    $barcode_number = $this->Item->get_barcode_by_id($id);
    $this->zend->load('Zend/Barcode');
    $barcodeOptions = array(
      'text' => $barcode_number['barcode']
    );
    $file = Zend_Barcode::draw('code128', 'image', $barcodeOptions, array());
    $code = time() . $barcode_number['barcode'];
    $store_image = imagepng($file, "assets/barcode/{$barcode_number['barcode']}.png");
    $data['image'] = $barcode_number['barcode'] . '.png';
    $data["title"] = "Barcode Generator";
    $this->load->view('templates/print_h', [
      '_moreCss' => ['js/air-datepicker/css/datepicker.min'],
      '_page_title' => $data["title"]
    ]);
    $this->load->view('barcode/render', $data);
    $this->load->view('templates/print_f', [
      '_moreJs' => []
    ]);
  }

  public function bulk_print($trans_id)
  {
    $this->load->model('Transaction_item');
    $this->load->model('Item');
    $this->zend->load('Zend/Barcode');
    $trans_items = $this->Transaction_item->load_all_trans_items_without_sizes($trans_id);

    $data['barcodes'] = [];
    foreach ($trans_items as $k => $t) {
      // $data['barcodes'][$t['barcode']] = $t['barcode'];
      $barcodeOptions = array(
        'text' => $t['barcode']
      );
      $file = Zend_Barcode::draw('code128', 'image', $barcodeOptions, array());
      $code = time() . $t['barcode'];
      $store_image = imagepng($file, "assets/barcode/{$t['barcode']}.png");
      $data['images'][$k]['image'] = $t['barcode'] . '.png';
      $data['images'][$k]['count'] = $t['qty'];
    }
    // var_dump( $data['images']);
    // exit;
    $data["title"] = "Barcodes";
    $this->load->view('templates/print_h', [
      '_moreCss' => [],
      '_page_title' => $data["title"]
    ]);
    $this->load->view('barcode/bulk_view', $data);
    $this->load->view('templates/print_f', [
      '_moreJs' => []
    ]);
    // var_dump($data['barcodes']);
    // exit;
  }

  public function generate_inventory($id, $size)
  {

    $this->load->model('Item');
    $item = $this->Item->fetch_item($id);
    $barcode_number = $this->Item->get_barcode_by_id($id);

    $this->zend->load('Zend/Barcode');
    $barcodeOptions = array(
      'text'      => $barcode_number['barcode'],
      'font' => 5,
      'barHeight' => 35,
      'drawText'  => true,
    );
    $rendererOptions = array();
    $file = Zend_Barcode::draw('code128', 'image', $barcodeOptions, $rendererOptions);
    $code = time() . $barcode_number['barcode'];
    $store_image = imagepng($file, "assets/barcode/{$barcode_number['barcode']}.png");
    $data['image'] = $barcode_number['barcode'] . '.png';
    $data["title"] = "Barcode Generator";

    $data['size'] = $size;
    $data['color'] = $item[0]['color'];

    // var_dump($data); exit;
    $this->load->view('templates/print_h', [
      '_moreCss' => ['js/air-datepicker/css/datepicker.min'],
      '_page_title' => $data["title"]
    ]);
    $this->load->view('barcode/render_inventory', $data);
    $this->load->view('templates/print_f', [
      '_moreJs' => []
    ]);
  }
}

/* End of file Render.php */
/* Location: ./application/controllers/Render.php */
