<?php $pageTitle = "Home" ?>

<!DOCTYPE html>
<html>
    <?php include 'partials/head.php' ?>
    <body class="home">
        <?php include 'partials/nav.php' ?>
        <div class="anchor" id="home"></div>
        <div class="fullpage">
            <div class="slider">
                <div class="slide cover"></div>
                <div v-show="currentHomeSlide == 3 || currentHomeSlide == 2 || currentHomeSlide == 1" transition="fade" class="slide slide3"></div>
                <div v-show="currentHomeSlide == 2 || currentHomeSlide == 1" transition="fade" class="slide slide2"></div>
                <div v-show="currentHomeSlide == 1" transition="fade" class="slide slide1"></div>
            </div>
            <div class="v-center">
                <div class="container t-center">
                    <div class="container container-md">
                        <div class="title">
                            <h1 class="animation slideUp"><?php $trans->get('home.title') ?></h1>                        
                            <p class="animation slideUp" data-delay="100"><?php  $trans->get('home.subtitle') ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-selector">
                <div class="content">
                    <div class="slide slide1" v-bind:class="{'active': currentHomeSlide==1}" @click="changeHomeSlide(1)"></div>
                    <div class="slide slide2" v-bind:class="{'active': currentHomeSlide==2}" @click="changeHomeSlide(2)"></div>
                    <div class="slide slide3" v-bind:class="{'active': currentHomeSlide==3}" @click="changeHomeSlide(3)"></div>
                </div>
            </div>
        </div>

        <div class="section black">
            <div class="container t-center">
                <div class="title">
                    <h2><?php $trans->get('intro.title') ?></h2>   
                    <p><?php $trans->get('intro.title_2') ?></p>
                </div>
                <p><?php $trans->get('intro.text_1') ?></p>

                <p class="important"><?php $trans->get('intro.price') ?></p>

                <p><?php $trans->get('intro.text_2') ?></p>

                <p><?php $trans->get('intro.text_3') ?></p>

                <p class="important gold"><?php $trans->get('intro.date') ?></p>
            </div>
        </div>
        
        <div class="anchor" id="zone"></div>
        <div class="section sector-slider slider-wrapper">
            <div class="slider">
                <div class="slide cover"></div>
                <div v-show="currentContextSlide == 6" transition="fade" class="slide slide1"></div>
                <div v-show="currentContextSlide == 5" transition="fade" class="slide slide2"></div>
                <div v-show="currentContextSlide == 4" transition="fade" class="slide slide3"></div>
                <div v-show="currentContextSlide == 3" transition="fade" class="slide slide4"></div>
                <div v-show="currentContextSlide == 2" transition="fade" class="slide slide5"></div>
                <div v-show="currentContextSlide == 1" transition="fade" class="slide slide6"></div>
            </div>
            <div v-show="currentContextSlide == 1" transition="fade" class="container t-center bp-md">
                <div class="title">
                    <h2><?php $trans->get('parc.1.title') ?></h2>
                    <p><?php $trans->get('parc.1.subtitle') ?></p>
                </div>
            </div>
            <div v-show="currentContextSlide == 2" transition="fade" class="container t-center bp-md">
                <div class="title">
                    <h2><?php $trans->get('parc.2.title') ?></h2>
                    <p><?php $trans->get('parc.2.subtitle') ?></p>
                </div>
            </div>
            <div v-show="currentContextSlide == 3" transition="fade" class="container t-center bp-md">
                <div class="title">
                    <h2><?php $trans->get('parc.3.title') ?></h2>
                    <p><?php $trans->get('parc.3.subtitle') ?></p>
                </div>
            </div>
            <div v-show="currentContextSlide == 4" transition="fade" class="container t-center bp-md">
                <div class="title">
                    <h2><?php $trans->get('parc.4.title') ?></h2>
                    <p><?php $trans->get('parc.4.subtitle') ?></p>
                </div>
            </div>
            <div v-show="currentContextSlide == 5" transition="fade" class="container t-center bp-md">
                <div class="title">
                    <h2><?php $trans->get('parc.5.title') ?></h2>
                    <p><?php $trans->get('parc.5.subtitle') ?></p>
                </div>
            </div>
            <div v-show="currentContextSlide == 6" transition="fade" class="container t-center bp-md">
                <div class="title">
                    <h2><?php $trans->get('parc.6.title') ?></h2>
                    <p><?php $trans->get('parc.6.subtitle') ?></p>
                </div>
            </div>
            <div class="slider-selector">
                <div class="content">
                    <div class="slide slide1" v-bind:class="{'active': currentContextSlide==1}" @click="changeContextSlide(1)"></div>
                    <div class="slide slide2" v-bind:class="{'active': currentContextSlide==2}" @click="changeContextSlide(2)"></div>
                    <div class="slide slide3" v-bind:class="{'active': currentContextSlide==3}" @click="changeContextSlide(3)"></div>
                    <div class="slide slide4" v-bind:class="{'active': currentContextSlide==4}" @click="changeContextSlide(4)"></div>
                    <div class="slide slide5" v-bind:class="{'active': currentContextSlide==5}" @click="changeContextSlide(5)"></div>
                    <div class="slide slide6" v-bind:class="{'active': currentContextSlide==6}" @click="changeContextSlide(6)"></div>
                </div>
            </div>
        </div>

        <div class="section gold t-center">
            <div class="container">
                <p><?php $trans->get('activities_1') ?></p>
                <p><?php $trans->get('activities_2') ?></p>
                <p><?php $trans->get('activities_3') ?></p>
            </div>
        </div>

        <div class="section brown bp-no tp-no">
            <div class="block gold">
                <div class="content">
                    <div class="subtitle">
                        <img src="/img/svg/tea.svg" alt="Détente">
                        <h3><?php $trans->get('activities.detente.title') ?></h3>
                    </div>
                    <p><?php $trans->get('activities.detente.1') ?></p>
                    <p><?php $trans->get('activities.detente.2') ?></p>
                    <p><?php $trans->get('activities.detente.3') ?></p>
                    <p class="small"><?php $trans->get('activities.detente.4') ?></p>
                    <p><?php $trans->get('activities.detente.5') ?></p>
                    <p class="small"><?php $trans->get('activities.detente.6') ?></p>
                    <p><?php $trans->get('activities.detente.7') ?></p>
                    <p><?php $trans->get('activities.detente.8') ?></p>
                </div>
            </div><!--
            --><div class="block">
                <div class="content">
                    <div class="subtitle">
                        <img src="/img/svg/ticket.svg" alt="Divertissement">
                        <h3><?php $trans->get('activities.divertissement.title') ?></h3>
                    </div>
                    <p><?php $trans->get('activities.divertissement.1') ?></p>
                    <p><?php $trans->get('activities.divertissement.2') ?></p>
                    <p><?php $trans->get('activities.divertissement.3') ?></p>
                    <p><?php $trans->get('activities.divertissement.4') ?></p>
                    <p><?php $trans->get('activities.divertissement.5') ?></p>
                    <p><?php $trans->get('activities.divertissement.6') ?></p>
                    <p><?php $trans->get('activities.divertissement.7') ?></p>

                </div>
            </div><!--
            --><div class="block">
                <div class="content">
                    <div class="subtitle">
                        <img src="/img/svg/bike.svg" alt="Déplacements" style="height: 70px; margin: -15px 0"; >
                        <h3><?php $trans->get('activities.deplacement.title') ?></h3>
                    </div>
                    <p><?php $trans->get('activities.deplacement.1') ?></p>
                    <p><?php $trans->get('activities.deplacement.2') ?></p>
                    <p><?php $trans->get('activities.deplacement.3') ?></p>
                </div>
            </div><!--
        --><div class="block gold">
            <div class="content">
                <div class="subtitle">
                    <img src="/img/svg/bag.svg" alt="Magasinage">
                    <h3><?php $trans->get('activities.magasinage.title') ?></h3>
                </div>
                <p><?php $trans->get('activities.magasinage.1') ?></p>
                <p><?php $trans->get('activities.magasinage.2') ?></p>
                <p><?php $trans->get('activities.magasinage.3') ?></p>
            </div>
        </div>
        
        <div class="anchor" id="plans"></div>
        <div class="section white">
            <div class="container plans">
                <div class="row stack">
                    <div class="col-md-6">
                        <div class="title-bar">
                            <h2><?php $trans->get('plans.title') ?></h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="title-bar">
                            <div class="links">
                                <a @click="currentType = 'studio'" v-bind:class="{ 'active':currentType=='studio'}"><?php $trans->get('plans.title') ?></a>
                                <a @click="currentType = '1_chamber'" v-bind:class="{ 'active':currentType=='1_chamber' }"><?php $trans->get('plans.1_chamber') ?></a>
                                <a @click="currentType = '2_chambers'" v-bind:class="{ 'active':currentType=='2_chambers' }"><?php $trans->get('plans.2_chambers') ?></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row stack same-height">
                    <div class="col-md-6">
                        <div class="plan-slide">
                            <div class="plan" transition="slide">
                                <img v-bind:src="'/img/plans/' + currentCondo.n + '.PNG'" alt="Studio Plan">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="breadcrumb">
                            <h3><?php $trans->get('plans.unit') ?> {{ currentCondo.n }}</h3>
                            <span class="light">/</span>
                            <span v-if="currentCondo.floor == 1" class="light">{{ currentCondo.floor }}<?php $trans->get('plans.floor_1') ?></span>
                            <span v-else class="light">{{ currentCondo.floor }}<?php $trans->get('plans.floor') ?></span>
                            <span class="light">/</span>
                            <span v-if="currentCondo.type == 'studio'" class="light"><?php $trans->get('plans.studio') ?></span>
                            <span v-if="currentCondo.type == '1_chamber'" class="light"><?php $trans->get('plans.1_chamber') ?></span>
                            <span v-if="currentCondo.type == '2_chambers'" class="light"><?php $trans->get('plans.2_chambers') ?></span>
                        </div>
                        <div class="description">
                            <div class="row stack">
                                <div class="col-xs-6">
                                    <span class="key"><?php $trans->get('plans.surface_int') ?></span>
                                    <span class="key"><?php $trans->get('plans.surface_ext') ?></span>
                                    <span class="key"><?php $trans->get('plans.ext') ?></span>
                                    <span class="key"><?php $trans->get('plans.floor_label') ?></span>
                                    <span class="key"><?php $trans->get('plans.price') ?></span>
                                </div>
                                <div class="col-xs-6">
                                    <span class="value">{{ currentCondo.surface_int }} pi2</span>
                                    <span class="value">{{ currentCondo.surface_ext }} pi2</span>
                                    <span class="value">{{ currentCondo.ext }}</span>
                                    <span class="value">{{ currentCondo.floor }}</span>
                                    <span class="value">{{ currentCondo.price }} $ +TX</span>
                                </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <a href="/files/{{ currentCondo.n }}_JEFFERY CONDOS.pdf" class="btn"><?php $trans->get('plans.pdf') ?></a>
                        </div>
                        <div class="inclusions"><?php $trans->get('plans.inclusions') ?></div>
                    </div>
                    <div class="col-md-12 slider-buttons">
                        <div v-for="c in condosByCurrentType()" class="slider-button" v-bind:class="{ 'active':condo == c.n }" @click="condo=c.n"></div>
                    </div>
                </div>
    
            </div>
        </div>
        
        <div class="anchor" id="contact"></div>
        <div class="section grey contact">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <h2><?php $trans->get('contact.title') ?></h2>
                        <p><?php $trans->get('contact.subtitle') ?></p>

                        <div class="coordinates">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4><?php $trans->get('contact.bureaux') ?></h4>
                                    <p>1860, rue Amherst</p>
                                    <p>Montréal (Québec)</p>
                                    <p>H2L 3L6</p>
                                    <br>
                                    <p>T 514 205-5559</p>
                                    <p>info@jefferycondos.ca</p>
                                </div>
                                <div class="col-md-6">
                                    <p><?php $trans->get('contact.week') ?></p>
                                    <p>16h - 19h </p>
                                    <br>
                                    <p><?php $trans->get('contact.weekend') ?></p>
                                    <p>12h - 16h</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form id="form">
                            <input type="hidden" name="type" value="career" id="type">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="<?php $trans->get('contact.name')?>*" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="<?php $trans->get('contact.email')?>*" required />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="<?php $trans->get('contact.phone')?>" />
                            </div>
                            
                            <div class="form-group">
                                <textarea type="text" name="message" id="message" class="form-control" rows="5" cols="10" required placeholder="<?php $trans->get('contact.message')?>*"></textarea>
                            </div>                          

                            <input type="submit" name="submit" value="<?php $trans->get('contact.btn')?>" class="btn btn-primary" />
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div id="map"></div>

        <?php include "partials/footer.php" ?>
        
        <!-- Contact Form -->
        <script>
            $('#form').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "contact",
                    method: "POST",
                    dataType: 'json',
                    data: $("#form").serialize(),
                    success: function(data) {
                        swal("<?php $trans->get('contact.success_title') ?>", "<?php $trans->get('contact.success') ?>", "success");
                        $('#form')[0].reset();
                    },
                    error: function(data) {
                        console.log(data);
                        swal("<?php $trans->get('contact.error_title') ?>", "<?php $trans->get('contact.error') ?>", "error");
                    }
                });
            });
            
        </script>

        <!-- Google Maps -->
        <script type="text/javascript">
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: {lat: -34.397, lng: 150.644},
                    styles: 
                    [{"stylers":[{"visibility":"on"},{"saturation":-100},{"gamma":0.54}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#4d4946"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"gamma":0.48}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"gamma":7.18}]}]
                });

                var geocoder = new google.maps.Geocoder();

                geocodeAddress(geocoder, map);
            }

            function geocodeAddress(geocoder, resultsMap) {
                var address = "1860, rue Amherst, Montréal QC H2L 3L6";
                geocoder.geocode({'address': address}, function(results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        resultsMap.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                        map: resultsMap,
                        position: results[0].geometry.location
                    });
                    } else {
                        console.log('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoc8uKiQ2Mw7J4qHUDXoCJYC-diZZZb7g&amp;callback=initMap" async="" defer=""></script>

        <script>
            var app = new Vue({
                el: "body",
                data: function() {
                    return {
                        currentHomeSlide: 1,
                        currentContextSlide: 1,
                        currentType: "studio",
                        condo: "101",
                        autoSlideHome: true,
                        autoSlideContext: true,
                        condos: {
                            101: {
                                n: 101,
                                floor: 1,
                                type: "2_chambers",
                                surface_int: "953",
                                surface_ext: "90",
                                ext: "balcony",
                                price: 343080
                            },
                            102 : {
                                n: 102,
                                floor: 1,
                                type: "1_chamber",
                                surface_int: 590,
                                surface_ext: 0,
                                ext: "ND",
                                price: 210630
                            },
                            103 : {
                                n: 103,
                                floor: 1,
                                type: "1_chamber",
                                surface_int: 605,
                                surface_ext: 81,
                                ext: "balcony",
                                price: 219010
                            },
                            201 : {
                                n: 201,
                                floor: 2,
                                type: "studio",
                                surface_int: 513,
                                surface_ext: 81,
                                ext: "balcony",
                                price: 184680
                            },
                            202 : {
                                n: 202,
                                floor: 2,
                                type: "studio",
                                surface_int: 510,
                                surface_ext: 0,
                                ext: "balcony",
                                price: 184110
                            },
                            203 : {
                                n: 203,
                                floor: 2,
                                type: "1_chamber",
                                surface_int: 805,
                                surface_ext: 0,
                                ext: "ND",
                                price: 297850
                            },
                            204 : {
                                n: 204,
                                floor: 2,
                                type: "1_chamber",
                                surface_int: 605,
                                surface_ext: 81,
                                ext: "balcony",
                                price: 226875
                            },
                            301 : {
                                n: 301,
                                floor: 3,
                                type: "1_chamber",
                                surface_int: 706,
                                surface_ext: 346,
                                ext: "terrasse",
                                price: 264750
                            },
                            302 : {
                                n: 302,
                                floor: 3,
                                type: "1_chamber",
                                surface_int: 672,
                                surface_ext: 174,
                                ext: "terrasse",
                                price: 252000
                            },
                            303 : {
                                n: 303,
                                floor: 3,
                                type: "2_chambers",
                                surface_int: 1007,
                                surface_ext: 229,
                                ext: "terrasse",
                                price: 377625
                            },
                            304 : {
                                n: 304,
                                floor: 3,
                                type: "1_chamber",
                                surface_int: 807,
                                surface_ext: 259,
                                ext: "terrasse",
                                price: 298590
                            }
                        }
                    }
                },
                ready: function() {
                    var vm = this;
                    setInterval(function() {

                        if(vm.autoSlideHome) {
                            vm.currentHomeSlide++;
                            if(vm.currentHomeSlide == 4) 
                                vm.currentHomeSlide = 1;
                        }

                        if(vm.autoSlideContext) {
                            vm.currentContextSlide++;
                            if(vm.currentContextSlide == 7) 
                                vm.currentContextSlide = 1;
                        }

                    }, 6000);
                },
                computed: {
                    currentCondo: function(){
                        return this.condos[this.condo];
                    }
                },
                methods: {
                    changeHomeSlide: function(nSlide) {
                        this.currentHomeSlide = nSlide;
                        this.autoSlideHome = false;
                    },
                    changeContextSlide: function(nSlide) {
                        this.currentContextSlide = nSlide;
                        this.autoSlideContext = false;
                    },
                    condosByCurrentType: function() {
                        var vm = this; 
                        var condos = [];
                        $.each(vm.condos, function(index, condo) {
                            if(condo.type == vm.currentType)
                                condos.push(condo);
                        });

                        vm.condo = condos[0].n;
                                            
                        return condos;
                    }
                }
            });
        </script>

    </body>
</html>