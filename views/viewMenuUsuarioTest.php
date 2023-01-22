
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card'>
                        <div class='card-header'>
                            <h1>Test Perruno <?php echo $_SESSION['nomUser']?></h1>
                        </div>
                        <div class='card-body'>
                           <form class="formularioDatosPersonales" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="formularioDatosPersonales" id="formularioDatosPersonales">
                        <div>
                            <div class="card-body p-md-5 text-black">


                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q1" name="q1" class="form-control form-control-lg" />
                                            <label class="form-label" for="q1">Pregunta 1</label>
                                        </div>
                                    </div>

                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q2" name="q2" class="form-control form-control-lg" />
                                            <label class="form-label" for="q2">Pregunta 2</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q3" name="q3" class="form-control form-control-lg" />
                                            <label class="form-label" for="q3">Pregunta 3</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q4" name="q4" class="form-control form-control-lg" />
                                            <label class="form-label" for="q4">Pregunta 4</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q5" name="q5"  class="form-control form-control-lg" />
                                            <label class="form-label" for="q5">Pregunta 5</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q6" name="q6"  class="form-control form-control-lg" />
                                            <label class="form-label" for="q6">Pregunta 6</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q7" name="q7" class="form-control form-control-lg" />
                                            <label class="form-label" for="q7">Pregunta 7</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q8" name="q8" class="form-control form-control-lg" />
                                            <label class="form-label" for="q8">Pregunta 8</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q9" name="q9" class="form-control form-control-lg" />
                                            <label class="form-label" for="q9">Pregunta 9</label>
                                        </div>
                                    </div>
                                    <div class="col mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="q10" name="q10" class="form-control form-control-lg" />
                                            <label class="form-label" for="q10">Pregunta 10</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center pt-3">
                                    <button type="submit" name="submit" id="submit" value="datosTest" class="btn fw-semibold btn-block mb-4"> Realizar Test </button>
                                </div>

                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://127.0.0.1/DAW/js/menuUsuario.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>