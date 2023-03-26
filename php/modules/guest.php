<div class="guest">
  <h2 class="title"><?= $lang_data[$lang_number]["home"]["guest"]; ?></h2>
  <div class="ratings">
    <div class="box1">
      <p><?= $lang_data[$lang_number]["guest"]["1"][0]; ?></p><br>
      <p><?= $lang_data[$lang_number]["guest"]["1"][1]; ?></p>
    </div>
    <div class="box1">
      <p><?= $lang_data[$lang_number]["guest"]["2"][0]; ?></p><br>
      <p><?= $lang_data[$lang_number]["guest"]["2"][1]; ?></p>
    </div>
    <div class="box1">
      <p><?= $lang_data[$lang_number]["guest"]["3"][0]; ?></p><br>
      <p><?= $lang_data[$lang_number]["guest"]["3"][1]; ?></p>
    </div>
  </div>
  <div class="g_rating">
    <p>Google: 
    <?php if ($api["status"] === "OK") 
      {
        if ($api["result"]["rating"]) {echo $api["result"]["rating"].' ('.$api["result"]["user_ratings_total"].')';};
      } else {
        echo '4+';} 
    ?>
    <br><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></p>
    <a target="_blank" href="https://g.page/r/CSa2a1Wf650kEB0/review"><?= $lang_data[$lang_number]["home"]["guest_w"]; ?></a>
  </div>
</div>