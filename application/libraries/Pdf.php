<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter PDF Library
 *
 * Generate PDF in CodeIgniter applications.
 *
 * @package            CodeIgniter
 * @subpackage        Libraries
 * @category        Libraries
 * @author            
 * @license            SHH License
 */

// reference the Dompdf namespace
use Dompdf\Dompdf;

class Pdf
{
	protected $ci;
    public function __construct(){
        
        // include autoloader
        require_once dirname(__FILE__).'/dompdf/autoload.inc.php';
        
        // instantiate and use the dompdf class
        $pdf = new DOMPDF();
        
        $CI =& get_instance();
        $CI->dompdf = $pdf;
        
    }
}
?>


















<?php
/*
 * Function to convert a number to the string literal for the number
 */
function getStringOfAmount($num) {
  $count = 0;
  global $ones, $tens, $triplets;
  $ones = array(
    '',
    ' One',
    ' Two',
    ' Three',
    ' Four',
    ' Five',
    ' Six',
    ' Seven',
    ' Eight',
    ' Nine',
    ' Ten',
    ' Eleven',
    ' Twelve',
    ' Thirteen',
    ' Fourteen',
    ' Fifteen',
    ' Sixteen',
    ' Seventeen',
    ' Eighteen',
    ' Nineteen'
  );
  $tens = array(
    '',
    '',
    ' Twenty',
    ' Thirty',
    ' Forty',
    ' Fifty',
    ' Sixty',
    ' Seventy',
    ' Eighty',
    ' Ninety'
  );

  $triplets = array(
    '',
    ' Thousand',
    ' Million',
    ' Billion',
    ' Trillion',
    ' Quadrillion',
    ' Quintillion',
    ' Sextillion',
    ' Septillion',
    ' Octillion',
    ' Nonillion'
  );
  return convertNum($num);
}

/**
 * Function to dislay tens and ones
 */
function commonloop($val, $str1 = '', $str2 = '') {
  global $ones, $tens;
  $string = '';
  if ($val == 0)
    $string .= $ones[$val];
  else if ($val < 20)
    $string .= $str1.$ones[$val] . $str2;  
  else
    $string .= $str1 . $tens[(int) ($val / 10)] . $ones[$val % 10] . $str2;
  return $string;
}

/**
 * returns the number as an anglicized string
 */
function convertNum($num) {
  $num = (int) $num;    // make sure it's an integer

  if ($num < 0)
    return 'negative' . convertTri(-$num, 0);

  if ($num == 0)
    return 'Zero';
  return convertTri($num, 0);
}

/**
 * recursive fn, converts numbers to words
 */
function convertTri($num, $tri) {
  global $ones, $tens, $triplets, $count;
  $test = $num;
  $count++;
  // chunk the number, ...rxyy
  // init the output string
  $str = '';
  // to display hundred & digits
  if ($count == 1) {
    $r = (int) ($num / 1000);
    $x = ($num / 100) % 10;
    $y = $num % 100;
    // do hundreds
    if ($x > 0) {
      $str = $ones[$x] . ' Hundred';
      // do ones and tens
      $str .= commonloop($y, ' and ', '');
    }
    else if ($r > 0) {
      // do ones and tens
      $str .= commonloop($y, ' and ', '');
    }
    else {
      // do ones and tens
      $str .= commonloop($y);
    }
  }
  // To display lakh and thousands
  else if($count == 2) {
    $r = (int) ($num / 10000);
    $x = ($num / 100) % 100;
    $y = $num % 100;
    $str .= commonloop($x, '', ' Lakh ');
    $str .= commonloop($y);
    if ($str != '')
      $str .= $triplets[$tri];
  }
  // to display till hundred crore
  else if($count == 3) {
    $r = (int) ($num / 1000);
    $x = ($num / 100) % 10;
    $y = $num % 100;
    // do hundreds
    if ($x > 0) {
      $str = $ones[$x] . ' Hundred';
      // do ones and tens
      $str .= commonloop($y,' and ',' Crore ');
    }
    else if ($r > 0) {
      // do ones and tens
      $str .= commonloop($y,' and ',' Crore ');
    }
    else {
      // do ones and tens
      $str .= commonloop($y);
    }
  }
  else {
    $r = (int) ($num / 1000);
  }
  // add triplet modifier only if there
  // is some output to be modified...
  // continue recursing?
  if ($r > 0)
    return convertTri($r, $tri+1) . $str;
  else
    return $str;
} ?>
