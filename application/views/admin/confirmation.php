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
        <!-- <div class="page-content--bgf7"> -->
            <!-- BREADCRUMB-->
            <!-- <div class="account2">
                <div class="image img-cir img-120">                        
                    <img src="<?php echo base_url().'img-profile/'. $gbr ?>" />
                </div>
                <h4 class="name" align="center"><?php echo $nama ?></h4>
            </div> -->
            <!-- END BREADCRUMB-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Confirmation List</h3>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Employee&nbsp;ID</th>        
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($krywn as $k){ ?>
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td><?php echo $k->nama; ?></td>
                                            <td class="desc"><?php echo $k->nmr; ?></td>
                                            <td>
                                                <div class="table-data-feature">
                                                <a href="<?php echo base_url()."admin/confirmed/".$k->nmr; ?>">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </button>
                                                </a>
                                                &nbsp;
                                                <a href="<?php echo "#"//base_url()."admin/delete/".$k->nmr; ?>">
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