<?php
  $html = new HtmlTableGenerator();
  $html->setHeader(array('Day', 'Month', 'Year'));
  $html->addLine(array('29', 'march', '2018'));
  $html->addLine(array('12', 'december', '2019'));
  $html->generateDisp();

  class HtmlTableGenerator{
    private $header = "";
    private $body = "";

    public function setHeader($header){
      $this->header = $header;
    }

    private function getHeader(){
      $data = "<table><thead><tr>";
      foreach($this->header as $item){
        $data .= "<th>" . $item . "</th>";
      }
      $data .= "</tr></thead>";
      return $data;
    }

    public function addLine($line){
      if($this->body == ""){
        $this->body = "<tbody>";
      }
      $this->body .= "<tr>";
      foreach($line as $item){
        $this->body .= "<td>" . $item . "</td>";
      }
      $this->body .= "</tr>";
    }

    public function generateGet(){
        return $this->getHeader() . $this->body . '</tbody></table>';
    }

    public function generateDisp(){
        echo($this->generateGet());
    }
  }
