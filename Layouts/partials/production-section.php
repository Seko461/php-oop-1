      <!-- Productions -->
    <section>
<div class="container text-center my-3" >
    <h2>Productions</h2>
 <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 m-3 g-3">

    <?php foreach ($productions as $production) : ?>
        <div class="col">
            <div class="card h-100">
                <div class="card-header  d-flex">
                    <h4 class="text-danger-emphasis text-capitalize mx-auto"><?= $production->title ?></h4>
                </div>
                <div class="card-body text-start">
                    <h6><span>Language: </span><?= $production->language ?></h6>
              <?php foreach ($array_votes as $item) : ?>
                    <h6><span>Vote: </span><?= $item?></h6>
                  <?php endforeach; ?> 
                </div>
            </div>
        </div>
    <?php endforeach; ?>
 </div>
 </div>
 </section>