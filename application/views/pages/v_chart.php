<!-- Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Table Analysis Naivebayes</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Klasifikasi</th>
                                            <th scope="col">Positif</th>
                                            <th scope="col">Negatif</th>
                                            <th scope="col">Netral</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Manual</th>
                                            <td><?= $data_tweets['data_count_test']->manual_positive ?></td>
                                            <td><?= $data_tweets['data_count_test']->manual_negative ?></td>
                                            <td><?= $data_tweets['data_count_test']->manual_neutral ?></td>
                                        </tr>
                                        <tr>
                                            <th>Naivebayes</th>
                                            <td><?= $data_tweets['data_count_test']->nb_positive ?></td>
                                            <td><?= $data_tweets['data_count_test']->nb_negative ?></td>
                                            <td><?= $data_tweets['data_count_test']->nb_neutral ?></td>
                                        </tr>
                                        <tr>
                                            <th>TextBlob</th>
                                            <td><?= $data_tweets['data_count_test']->tb_positive ?></td>
                                            <td><?= $data_tweets['data_count_test']->tb_negative ?></td>
                                            <td><?= $data_tweets['data_count_test']->tb_neutral ?></td>
                                        </tr>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th class="d-none d-xl-table-cell">Selisih</th>
                                            <td><?= abs($data_tweets['data_count_test']->textblob_positive - $data_tweets['data_count_test']->nb_positive) ?></td>
                                            <td><?= abs($data_tweets['data_count_test']->textblob_negative - $data_tweets['data_count_test']->nb_negative) ?></td>
                                            <td><?= abs($data_tweets['data_count_test']->textblob_neutral - $data_tweets['data_count_test']->nb_neutral) ?></td>
                                        </tr>
                                        <tr>
                                            <th colspan="4">Akurasi Naivebayes : <?=  $data_tweets['accuracy'] * 100 ?>%</th>
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Analysis Naivebayes</h6>
                            <canvas id="pie-chart-result"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Akurasi Naivebayes</h6>
                            <canvas id="pie-chart-accuracy"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart End -->

            <script src="<?= base_url() ?>assets/lib/chart/chart.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

            <script>
                // Pie Chart
                var ctx5 = $("#pie-chart-accuracy").get(0).getContext("2d");
                var myChart5 = new Chart(ctx5, {
                    type: "pie",
                    data: {
                        labels: ["Sesuai", "Tidak Sesuai"],
                        datasets: [{
                            backgroundColor: [
                                "rgba(37, 109, 223, .8)",
                                "rgba(200, 39, 39, .8)",
                            ],
                            data: [
                                <?= $data_tweets['accuracy'] * 10 ?>,
                                <?= (1 - $data_tweets['accuracy']) * 10 ?>,
                            ]
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });

                // Pie Chart
                var ctx5 = $("#pie-chart-result").get(0).getContext("2d");
                var myChart5 = new Chart(ctx5, {
                    type: "pie",
                    data: {
                        labels: ["Positive", "Negative", "Neutral"],
                        datasets: [{
                            backgroundColor: [
                                "rgba(37, 109, 223, .8)",
                                "rgba(200, 39, 39, .8)",
                                "rgba(204, 191, 126, .8)"
                            ],
                            data: [
                                <?= $data_tweets['data_count_test']->nb_positive ?>,
                                <?= $data_tweets['data_count_test']->nb_negative ?>,
                                <?= $data_tweets['data_count_test']->nb_neutral ?>
                            ]
                        }]
                    },
                    options: {
                        responsive: true
                    }
                });
            </script>