<!DOCTYPE html>
<html>
  <head>
    <title>	Vunerability Assessment & Penetration Testing Report </title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      vertical-align: middle;
      }
      input:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      th, td {
      width: 28%;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      }
      .first-col {
      width: 16%;
      text-align: left;
      }
      textarea:hover {
      outline: none;
      border: 1px solid #1c87c9;
      }
      table {
      width: 100%;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .question {
      padding: 15px 0 5px;
      color: #095484;
      }
      .question-answer label {
      display: block;
      padding: 0 20px 10px 0;
      }
      .question-answer input {
      width: auto;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      th, td {
      word-break: keep-all;
      }
      }
	  .day-visited, .time-visited {
      position: relative;
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="report-data.php" method="post">
	  
        <h1>Vunerability Assessment & Penetration Testing Report</h1>
		<div class="name">
          <input type="text" name="name" placeholder="Name" />
        </div>
		<h4>Email of client</h4><input type="text" name="email" />
		<h4>Day of Scan</h4>
        <div class="day-visited">
          <input type="date" name="dayvisited" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        
        <p class="question">Add the list of attacks performed </p>
        <textarea name="list" rows="5"></textarea>
        <p class="question">Vulnerability Scans Result </p>
        <table>
          <tr>
            <th class="first-col"></th>
            <th>Passed</th>
            <th>Fail</th>
          </tr>
          <tr>
            <td class="first-col">SQL Injection</td>
            <td><input type="radio" value="Passed" name="SQL1" /></td>
            <td><input type="radio" value="Fail" name="SQL1" /></td>
          </tr>
          <tr>
            <td class="first-col">Weak credentials/Brute Force </td>
            <td><input type="radio" value="Passed" name="Weak" /></td>
            <td><input type="radio" value="Fail" name="Weak" /></td>
          </tr>
          <tr>
            <td class="first-col">Cross Site Scripting</td>
            <td><input type="radio" value="Passed" name="Cross1" /></td>
            <td><input type="radio" value="Fail" name="Cross1" /></td>
          </tr>
        </table>
        <p class="question">Add any comments for improving the website</p>
        <textarea name="comments" rows="5"></textarea>
        <div class="btn-block">
          <button type="submit" >Send</button>
        </div>
      </form>
    </div>
  </body>
</html>