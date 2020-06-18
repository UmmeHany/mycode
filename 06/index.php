<?php
/**
 * JavaScript (jQuery and jQueryUI):
 * Create tabs
 * - Show tab 2 when loading the page
 * - Click on tab 3: change content of element #tab-3 to "Ich bin Tab 3 und wurde geklickt."
 * - Click on button: make list in tab 1 sortable
 */

?>
<!doctype html>
<html>
<head>
  <script src="lib/jquery.min.js"></script>
  <script src="lib/jqueryui.js"></script>
  <script type="text/javascript">
    $( document ).ready(function() {
          $('#tab-1').hide();
          $('#tab-3').hide();
      });
    function content_change(){
      $('#tab-1').hide();
      $('#tab-2').hide();
      $('#tab-3').show();
      $('#para-3').text("Ich bin Tab 3 und wurde geklickt.");  
    }
    function sort_list(){
      $( "#sortable" ).sortable();
    }
    function show_tab_1(){
      $('#tab-1').show();
      $('#tab-2').hide();
      $('#tab-3').hide();
    }
    function show_tab_2(){
      $('#tab-2').show();
      $('#tab-1').hide();
      $('#tab-3').hide();
    }
  </script>
  <title>Tabs, Sortable</title>
</head>
<body>
  <h1>Tabs, Sortable</h1>
  <div id="tabs">
    <ul>
      <li><a href="#tab-1" onclick='return show_tab_1()'>Tab 1</a></li>
      <li><a href="#tab-2" onclick='return show_tab_2()'>Tab 2</a></li>
      <li><a href="#tab-3" onclick='return content_change()'>Tab 3</a></li>
    </ul>
    <div id="tab-1" onclick='show_tab_1()'>
      <p>Ich bin Tab 1</p>
      <ul id="sortable">
        <li>Listenpunkt 1</li>
        <li>Listenpunkt 2</li>
        <li>Listenpunkt 3</li>
        <li>Listenpunkt 4</li>
      </ul>
      <button type="button" onclick='sort_list()'>Liste sortierbar machen</button>
    </div>
    <div id="tab-2">
      <p>Ich bin Tab 2</p>
    </div>
    <div id="tab-3">
      <p id="para-3">Ich bin Tab 3</p>
    </div>
  </div>
</body>
</html>