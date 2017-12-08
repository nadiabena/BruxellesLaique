          
          @if(isset($personne))
            <?php echo 'test' //include 'vue_search.php'      sizeof($personne)!=0 ?>

            @foreach($personne as $key => $p)
            <div style="color:red; background:red" class="container">
              <div class="col-md-3">
                <!-- <p style="text-align: center;"> <?//= $p->nom.' '.$p->prenom ?></p> -->

                <a href="#" onclick="recuperer_input(this, event)" id="<?= $p['id_personne'] ?>" class="id" data-id="<?= $p['id_personne'] ?>"><?= $p['nom']." ".$p['prenom'] ?></a> <br/>

              </div>
            </div>
            @endforeach

          @endif

