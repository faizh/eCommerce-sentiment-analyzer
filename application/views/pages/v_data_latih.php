<!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Data Latih</h6>
                            <form method="post" action="<?= base_url() ?>index.php/data/import_data_tweet">
                                <div class="row">
                                    <div class="card-body col-2">
                                        <label>Start Date</label>
                                        <input type="date" name="start_date" class="form-control" placeholder="Input" required>
                                    </div>
                                    <div class="card-body col-2">
                                        <label>End Date</label>
                                        <input type="date" name="end_date" class="form-control" placeholder="Input" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary m-2">Import Data Twitter</button>
                                    </div>
                                </div>
                            </br>
                            </form>
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
                                            if (count($data_tweets) == 0) { ?>
                                                <tr>
                                                    <td style="text-align: center;" colspan="2">No Data</td>
                                                </tr>
                                            <?php }else{
                                                foreach ($data_tweets as $tweet) { ?>
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