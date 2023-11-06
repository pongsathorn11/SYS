<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Basic Datatable</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-end">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 23</option>
                        <option value="1">July 23</option>
                        <option value="2">Jun 23</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Zero Configuration</h4>
                        <div class="table-responsive">
                            <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>Position</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark ">
                                    <?php
                                      foreach ($table as $key => $value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $value["id"];?></td>
                                        <td><?php echo $value["name"];?></td>
                                        <td><?php echo $value["position"];?></td>
                                        <td><?php echo $value["age"];?></td>
                                        <td><?php echo $value["address"];?></td>
                                    </tr>
                                    <?php 
                                       }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- order table -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>