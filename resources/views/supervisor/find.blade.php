<style>
    * {
    /* Change your font family */
    font-family: sans-serif;
}

.content-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    width: 300px; /* or any specific width */
    margin-left: auto;
    margin-right: auto;
    place-items: center;
}

.content-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

.content-table th,
.content-table td {
    padding: 12px 15px;
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Style HTML Tables with CSS</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <table class="content-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Matric No</th>
            <th>Project Supervisor</th>
            <th>Project Title</th>
            <th>Due Date</th>
          </tr>
        </thead>
        @foreach($results as $student)
        <tbody>
          <tr>
            <td>{{ $student->name}}</td>
            <td>{{ $student->course}}</td>
            <td>{{ $student->matric_no}}</td>
            <td>{{ $student->project_supervisor}}</td>
            <td>{{ $student->project_topic}}</td>
            <td>{{ $student->due_date}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
</body>
</html>