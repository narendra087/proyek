        <style>
            .center {
                text-align: center;
            }

            .pagination {
                display: inline-block;
            }

            .pagination a {
                color: black;
                float: left;
                padding: 8px 16px;
                text-decoration: none;
                transition: background-color .3s;
                border: 1px solid #ddd;
                margin: 0 4px;
            }

            .pagination a.active {
                background-color: #4CAF50;
                color: white;
                border-radius: 5px;
                border: 1px solid #4CAF50;
                pointer-events: none;
            }

            .pagination a:hover:not(.active) {
                background-color: #ddd;
                border-radius: 5px;
            }
        </style>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content" style="float: right;">                                
                                <!-- <h1 class="title-4">Welcome back<span> <?php echo $this->session->userdata('nama'); ?> ! </span></h1> -->
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <!-- <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <!-- <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">10,368</h2>
                                <span class="desc">members online</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">388,688</h2>
                                <span class="desc">items sold</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">1,086</h2>
                                <span class="desc">this week</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">$1,060,386</h2>
                                <span class="desc">total earnings</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <!-- <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4"> -->
                            <!-- CHART-->
                            <!-- <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">chart</h3>
                                <div class="chart-wrap">
                                    <canvas id="widgetChart5"></canvas>
                                </div>
                                <div class="statistic-chart-1-note">
                                    <span class="big">10,368</span>
                                    <span>/ 16220 items sold</span>
                                </div>
                            </div> -->
                            <!-- END CHART-->
                        <!-- </div>
                        <div class="col-md-6 col-lg-4"> -->
                            <!-- TOP CAMPAIGN-->
                            <!-- <div class="top-campaign">
                                <h3 class="title-3 m-b-30">top campaigns</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                            <tr>
                                                <td>1. Australia</td>
                                                <td>$70,261.65</td>
                                            </tr>
                                            <tr>
                                                <td>2. United Kingdom</td>
                                                <td>$46,399.22</td>
                                            </tr>
                                            <tr>
                                                <td>3. Turkey</td>
                                                <td>$35,364.90</td>
                                            </tr>
                                            <tr>
                                                <td>4. Germany</td>
                                                <td>$20,366.96</td>
                                            </tr>
                                            <tr>
                                                <td>5. France</td>
                                                <td>$10,366.96</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                            <!-- END TOP CAMPAIGN-->
                        <!-- </div>
                        <div class="col-md-6 col-lg-4"> -->
                            <!-- CHART PERCENT-->
                            <!-- <div class="chart-percent-2">
                                <h3 class="title-3 m-b-30">chart by %</h3>
                                <div class="chart-wrap">
                                    <canvas id="percent-chart2"></canvas>
                                    <div id="chartjs-tooltip">
                                        <table></table>
                                    </div>
                                </div>
                                <div class="chart-info">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note">
                                        <span class="dot dot--red"></span>
                                        <span>Services</span>
                                    </div>
                                </div>
                            </div> -->
                            <!-- END CHART PERCENT-->
                        <!-- </div>
                    </div>
                </div>
            </section> -->
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Data Karyawan</h3>
                            <!-- <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <!-- <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th> -->
                                            <th>Name</th>
                                            <th>Employee&nbsp;ID</th>
                                            <th>Email</th>
                                            <th>Unit</th>              
                                            <th>Posisi</th>
                                            <th>Gender</th>
                                            <th>Birth Date</th>          
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($krywn as $k){ ?>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <!-- <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td> -->
                                            <td><?php echo $k->nama; ?></td>
                                            <td class="desc"><?php echo $k->nmr; ?></td>
                                            <td>
                                                <span class="block-email"><?php echo $k->email; ?>
                                            </td>
                                            <td><?php echo $k->unit; ?></td>
                                            <td>
                                                <span><?php echo $k->posisi; ?></span>
                                            </td>
                                            <td><?php echo $k->gender; ?></td>
                                            <td><?php echo $k->tmptlhr.", ".$k->tgllhr; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                <a href="<?php echo base_url()."admin/profile/".$k->nmr; ?>">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </button>
                                                </a>
                                                &nbsp;
                                                <a href="<?php echo base_url()."admin/delete/".$k->nmr; ?>">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        <?php } ?>
                                    </tbody>
                                </table>                                
                            </div>
                            <div class="center">
                                <?php 
                                    echo $this->pagination->create_links(); 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->