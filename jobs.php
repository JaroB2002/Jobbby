<?php 
    include_once(__DIR__.'/classes/Vacature.php');
    include_once(__DIR__.'/classes/User.php');

    session_start();


    if (!empty($_GET['order'])){
        $order = $_GET['order'];
    } else {
        $order = '';
    }
    $jobs = new Vacature();
    $jobs = $jobs->getVacatures($order);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once(__DIR__ . '/compartments/header.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="css/jobs.css">
    <title>Jobs - Jobbby</title>

</head>
<body>

<div class="center-search">
    <div class="w-1/2 flex items-center bg-white rounded-full py-2">
        <input class="rounded-l-full w-full px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Job titel of trefwoord">
        <div class="p-2">
            <svg class="fill-current text-blue-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.5 3C5.91 3 3 5.91 3 9.5C3 11.09 3.5 12.56 4.39 13.77L1.5 16.66L2.34 17.5L5.23 14.61C6.44 15.5 7.91 16 9.5 16C13.09 16 16 13.09 16 9.5C16 5.91 13.09 3 9.5 3ZM9.5 14C7.01 14 5 11.99 5 9.5C5 7.01 7.01 5 9.5 5C11.99 5 14 7.01 14 9.5C14 11.99 11.99 14 9.5 14Z"/></svg>
        </div>
        <div class="border-r-2 border-gray-300"></div>
        <input class="rounded-r-full w-full px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Locatie">
        <div class="p-2">
            <svg class="fill-current text-blue-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.84 18.26L16.07 13.5C17.04 12.19 17.5 10.66 17.5 9C17.5 4.03 13.97 0.5 9 0.5C4.03 0.5 0.5 4.03 0.5 9C0.5 13.97 4.03 17.5 9 17.5C10.66 17.5 12.19 17.04 13.5 16.07L18.26 20.84C18.63 21.21 19.21 21.21 19.58 20.84L20.84 19.58C21.21 19.21 21.21 18.63 20.84 18.26ZM9 15.5C5.41 15.5 2.5 12.59 2.5 9C2.5 5.41 5.41 2.5 9 2.5C12.59 2.5 15.5 5.41 15.5 9C15.5 12.59 12.59 15.5 9 15.5Z"/></svg>
        </div>
    </div>
</div>

<div class="center-filter">
    <div class="filter-top">
        <div id="filter-id">
        <form class="formpost" action="" method="GET" name="submit">

            <p>Filters</p>
            <select name="order" id="order" onchange="this.form.submit()">
                <option value="new">Nieuw</option>
                <option value="alpha">Alfabetisch</option>
            </select>
            <input type="submit" value="Submit" class="submit_btn">
        </form>

        
        
        </div>

        <!-- <div>
            <label for="sector"><br>Sector<br></label>
                <select id="nodig" name="sector">
                    <option value="informatica">Informatica</option>
                    <option value="tourisme">Tourisme</option>
                    <option value="horeca">Horeca</option>
                    <option value="communicatie">Communicatie</option>
                    <option value="design">Design</option>
                    <option value="industrieel">Industrieel</option>
                    <option value="bureauwerk">Bureauwerk</option>
                    <option value="verkoop">Verkoop</option>
                </select>
        </div>

        <div id="filter-id">
            <label for="filters">Bedrag</label>
        </div> -->
    </div>
</div>


    <div class="center-jobs">
        <div class="all-jobs">
                <?php foreach($jobs as $job): ?>
                        <?php 
                            if($job['pro_vacature'] == 1){
                                ?><div class="entire-card-yellow"><?php
                            }else{
                                ?><div class="entire-card"><?php
                            }
                        ?>
                        <a href="job.php?id=<?php echo $job['id'];?>">
                            <div class="vac-title">
                                <?php echo $job['job_titel']?>
                            </div>
                        </a>
                            

                            <div class="vac-gevraagd-uurloon">
                                <p class="nodig"><?php echo $job['nodig']?></p>
                                <p class="uurloon"><?php echo "€" . $job['salaris'] . " per uur."?></p>
                            </div>

                            <div class="card-bottom">
                                <div class="side-side">
                                    <div>
                                        <img id="chrome" src="images/chrome.png" alt="">
                                    </div>
                                    <div class="vac-beschrijving">
                                        <div>
                                            <div class="vac-bedrijf">
                                                <p><?php echo $job['bedrijfnaam']?></p>
                                            </div>
                                            <div class="vac-locatie">
                                                <img src="images/loc.svg" alt="">
                                                <p><?php echo $job['locatie']?></p>
                                            </div>
                                        </div>
                                        <div class="favorite">
                                            <form class="formpost" action="" method="POST" data-id="<?php echo $job['id']?>">
                                                <input type="submit" id="btn-opmaak" class="button" value="+" name="add">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>    
        </div>
    </div>
    
        
</body>
<script>
    let nieuw = document.getElementById('nieuw');
    let alfabet = document.getElementById('alfabet');
    const jbs = document.querySelector('.center-jobs');

    const forms = document.querySelectorAll('.formpost');
        forms.forEach(form => {
        form.addEventListener('submit', e => {
            e.preventDefault();
            let id = e.target.dataset.id;
            formdata = new FormData();
            formdata.append('id', id);
            
            if(e.submitter.name === 'add') {
                console.log('Added Favorite');
                console.log(id);
                fetch('ajax/addToFavorite.ajax.php', {
                    method: 'POST',
                    body: formdata,
                }) 
                .then(
                    response => response.json())
                .then(result => {
                    console.log(result);
                    if(result.status === 'success') {
                        console.log('success favorites');
                        e.target.parentElement.parentElement.style.color = 'green';
                    } else {
                        console.log('error favorites');
                    }
                })
            } 
        });
    });

</script>
<footer>
    <?php include_once(__DIR__.'/compartments/footer.php')?>
</footer>
</html>
