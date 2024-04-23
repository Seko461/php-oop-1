      <!-- Movies -->
    <section>
<div class="container text-center my-3" >
    <h2>Movies</h2>
 <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 m-3 g-3">

    <?php foreach ($movies as $movie) : ?>
        <div class="col">
            <div class="card h-100">
                <div class="card-header  d-flex">
                    <h4 class="text-danger-emphasis text-capitalize mx-auto"><?= $movie->title ?></h4>
                </div>
                <div class="card-body text-start px-3">
                    <h6><span>Language: </span><?= $movie->language ?></h6>
              
                    <h6><span>Vote: </span><?= rand(1,10) ?></h6>

                    <h6><span>Profits: </span><?= $movie->getProfits() ?></h6>
                    
                    <h6><span>Length: </span><?= $movie->getLength() ?></h6>
                
                  <div class="card-footer">
                     <h6>Genre: </h6>
                         <?php foreach ($movie->genre as $genre) : ?>
                             <span><?=  $genre ?></span>
                         <?php endforeach; ?>
                         </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
 </div>
 </div>
 </section>