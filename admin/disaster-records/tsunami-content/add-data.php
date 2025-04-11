<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Disaster Records</title>
</head>
<body>
  
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Input Data for Tsunami Records
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="../../code.php" method="POST">

                            <div class="mb-3">
                                <label> Barangay </label>
                                <select class="form-control form-select mb-3" aria-label=".form-select-lg example" name="barangay" required>
                                    <option value="">--Select--</option>
                                    <option value="Cabacongan">Cabacongan</option>
                                    <option value="Colongcogong">Colongcogong</option>
                                    <option value="Canatuan">Canatuan</option>
                                    <option value="Gibgos">Gibgos</option>
                                    <option value="Guijalo">Guijalo</option>
                                    <option value="Haponan">Haponan</option>
                                    <option value="Maqueda">Maqueda</option>
                                    <option value="San Vicente">San Vicente</option>
                                    <option value="Tabgon">Tabgon</option>
                                    <option value="Tabiguian">Tabiguian</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label>Zone</label>
                                <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="zone" required>
                                        <option value="">--Select--</option>
                                        <option value="Zone 1">Zone 1</option>
                                        <option value="Zone 2">Zone 2</option>
                                        <option value="Zone 3">Zone 3</option>
                                        <option value="Zone 4">Zone 4</option>
                                        <option value="Zone 5">Zone 5</option>
                                        <option value="Zone 6">Zone 6</option>
                                        <option value="Zone 7">Zone 7</option> 
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label>Type of Disaster</label>
                                    <select class="form-control form-select mb-3" aria-label=".form-select-lg example" name="disaster"  required>
                                        <option value="">--Select--</option>          
                                        <option value="Tsunami">Tsunami</option>                 
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label>No. of Tsunami Map</label>
                                <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="number_map" required>
                                        <option value="">--Select--</option>          
                                        <option value="0">0</option>          
                                        <option value="1">1</option>                    
                                        <option value="2">2</option>                    
                                        <option value="3">3</option>                    
                                        <option value="4">4</option>                    
                                        <option value="5">5</option>                    
                                        <option value="6">6</option>                    
                                    </select>
                            </div>
                            <div class="mb-3">
                                <label>Population at Risk</label>
                                <input type="text" name="population_at_risk" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Recommendation</label>
                                <input type="text" name="recommendation" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Remarks</label>
                                <input type="text" name="remarks" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save-tsunami" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>