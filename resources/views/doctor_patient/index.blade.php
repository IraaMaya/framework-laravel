<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-Patient Relationships</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Doctor-Patient Relationships</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Doctor Name</th>
                    <th>Specialization</th>
                    <th>Patient Name</th>
                    <th>Ailment</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctorPatients as $doctorPatient)
                    <tr>
                        <td>{{ $doctorPatient->doctor_name }}</td>
                        <td>{{ $doctorPatient->specialization }}</td>
                        <td>{{ $doctorPatient->patient_name }}</td>
                        <td>{{ $doctorPatient->ailment }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>