<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- VueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <title>PHP dischi json</title>
</head>
<body>
    
    <header>
        <div class="container">
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </div>
    </header>
    <main>
        <div id="app">
            <div class="container container-mz">
                <div class="row row-cols-1 row-cols-md-3 g-4">

                    <!-- faccio il ciclo con v-for nella pagina index -->
                    <div 
                    v-for="(cd, index) in disc" :key="index"
                    class="col"
                    
                    @click="getDiscDetail(index)">

                        <div class="card ">
                            
                            <img :src="cd.poster" class="card-img-top" :alt="cd.title">
                            <div class="card-body d-flex flex-column align-items-center">

                                <h5 class="card-title">{{cd.title}}</h5>
                                <p class="card-text">{{cd.author}}</p>
                                <h5 class="card-text">{{cd.year}}</h5>

                            </div>
                        </div>
                    </div>

                    <div v-if="showDiscDetail"  id="details-container">
                        <div class="disc single-disc">
                            <img :src="singleDisc.poster" :alt="singleDisc.title" />
                            <span>{{ singleDisc.author }}</span>
                            <span>{{ singleDisc.genre }}</span>
                            <span><strong>{{ singleDisc.year }}</strong></span>
                            
                            <div class="close-button-container">
                                <button @click="showDiscDetail = false" class="button close-button">X</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>

<script src="./js/script.js"></script>
</html>