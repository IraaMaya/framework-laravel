<!DOCTYPE html>
<html>
<head>
    <title>Formulir JSON</title>
</head>
<body>
    <h1>Formulir JSON</h1>
    <form id="jsonForm" method="POST" action="/json-submit">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <button type="button" onclick="submitForm()">Submit</button>
</form>

<script>
    function submitForm() {
        const form = document.getElementById('jsonForm');
        const formData = new FormData(form);
        const data = {};

        formData.forEach((value, key) => {
            data[key] = value;
        });

        fetch('/json-submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            alert('Data Diterima: ' + JSON.stringify(data));
        });
    }
    </script>
    </body>
    </html>

 