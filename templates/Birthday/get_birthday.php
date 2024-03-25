<?php
$data_json = json_encode($data);
?>

  <?php 
      if (!empty($data)): 
      
      foreach ($data['students_birthday'] as $record): ?>

  <?php endforeach; ?>
    <?php else: ?>
        <p>NOOOOOOOOOOOOOOOOOOOOOOOOON</p>
    <?php endif; ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Birthday</title>
<?=
 $this->Html->css(['fonts', 'getBirthday']) 
?>
</head>
<body>
  
  <div class="header">
    <h3>Citation et anniversaires</h3>
    <h3><?php
        $date = date('d-m-y');
        echo $date;
        ?>
  </h3>
  </div>
  <div class="mainInfo">
    <div class="birthday">
    <img src="<?= $this->Url->webroot('img/circle.svg'); ?>" alt="">
      <h1 id="names-list"></h1>
    </div>
    <div class="informations">
      <div class="quote">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id modi excepturi dolorum nisi vitae corrupti alias, consectetur, quidem, recusandae eligendi explicabo officia dolore. Qui ab laborum cupiditate sapiente culpa! Perspiciatis?</p>
      </div>
      <div class="redguy">
      <img src="<?= $this->Url->webroot('img/character_1.svg'); ?>" alt="">
      </div>
    </div>
  </div>
    <script>
    let data = <?php echo $data_json; ?>;

    let currentNameElement = document.getElementById('names-list');

    let currentIndex = 0;

    function showNextName() {
        let currentName = data.students_birthday[currentIndex];

        currentNameElement.textContent = currentName.firstname + ' ' + currentName.lastname;

        currentIndex++;

        if (currentIndex >= data.students_birthday.length) {
            currentIndex = 0;
        }
    }


    setInterval(showNextName, 2500); 

    showNextName();
</script>
</body>
</html>