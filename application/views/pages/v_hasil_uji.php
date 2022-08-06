<!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Hasil Uji Naivebayes</h6>
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="70%">Tweet</th>
                                            <th scope="col" width="15%">Sentiment</th>
                                            <th scope="col" width="15%">Naivebayes</th>
                                            <th scope="col" width="15%">Textblob</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if (count($data_uji) == 0) { ?>
                                                <tr>
                                                    <td style="text-align: center;" colspan="2">No Data</td>
                                                </tr>
                                            <?php }else{
                                                foreach ($data_uji as $tweet) {
                                                    if ($tweet->sentiment != $tweet->naive_bayes_analysis) {
                                                        $class_nb = "warning";
                                                    }else{
                                                        $class_nb = "success";
                                                    }

                                                    if ($tweet->sentiment != $tweet->textblob_analysis) {
                                                        $class_tb = "warning";
                                                    }else{
                                                        $class_tb = "success";
                                                    }
                                                 ?>
                                                    <tr>
                                                        <td><?= $tweet->clean_tweet ?></td>
                                                        <td><?= $tweet->sentiment ?></td>
                                                        <td><button class="btn btn-<?= $class_nb ?>"><?= $tweet->naive_bayes_analysis ?></button></td>
                                                        <td><button class="btn btn-<?= $class_tb ?>"><?= $tweet->textblob_analysis ?></button></td>
                                                    </tr>
                                            <?php }
                                            } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->