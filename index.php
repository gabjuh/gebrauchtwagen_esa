<?php 

  require_once 'class/fahrzeug.class.php';
  require_once 'header.php';
  require_once 'willkommen.php';

  
  
  $auto = new Fahrzeug();
  
  $autos = $auto->getData('data/anzeigen.php');
  
  $auto->__construct($autos[0]);

  var_dump($autos);
  echo $autos[0]['modell'];

?>
  <h4 class="my-5">Aktuelle Wagen zum Verkauf</h4>
  
  <?php foreach ($autos as $auto): ?>
    
  <?php endforeach; ?>


  <?php foreach($autos as $auto): ?>
    <?php foreach($auto as $data): ?>
      <table class="table">
        <tbody>
          <?php foreach($data as $key => $val): ?>
            <tr>
              <th>
                <?= implode(' ', preg_split('/(?=[A-Z])/', ucfirst($key))) ?>
              </th>
              <td>
                <?= $val ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endforeach; ?>
  <?php endforeach; ?>
</div>

<?php 

require_once 'footer.php';

?>
