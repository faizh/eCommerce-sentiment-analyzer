<!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Data Uji</h6>

                            <form action="<?= base_url() ?>index.php/data/create_data_uji" method="post">
                                <div class="row">
                                    <div class="col-3">
                                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="presentase_data_uji">
                                            <option selected="" disabled>Presentase Data Uji</option>
                                            <option value="10">10%</option>
                                            <option value="20">20%</option>
                                            <option value="30">30%</option>
                                            <option value="40">40%</option>
                                        </select> 
                                    </col>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary">Get Data Uji</button>
                                    </div>
                                </div>
                                </br>
                            </form></br>
                            
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="80%">Tweet</th>
                                            <th scope="col" width="20%">Sentiment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if (count($data_uji) == 0) { ?>
                                            <tr>
                                                <td style="text-align: center;" colspan="2">No Data</td>
                                            </tr>
                                        <?php }else{
                                            foreach ($data_uji as $tweet) { ?>
                                                <tr>
                                                    <td><?= $tweet->clean_tweet ?></td>
                                                    <td><?= $tweet->sentiment ?></td>
                                                </tr>
                                            <?php }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->