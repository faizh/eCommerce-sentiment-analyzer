<!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Data Latih</h6>
                            <a href="<?= base_url() ?>index.php/data/create_data_uji"><button class="btn btn-primary">Get Data Uji</button></a>
                            </br>
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