<?php
if(!defined('LIFE')){
    die();
}

if (!isset($_GET['problemId'])){
?>
<style>
  body {
    font-family: sans-serif !important;
    background-color: #f4f4f4;
    margin: 0;

    padding: 0;
  }

  .problem-statements {
    max-width: 1400px;
    padding: 200px 0;
    margin: auto;
    min-height: 500px;
  }

  td > details > p {
    margin-top: 1rem;
    /* font-family: sans-serif !important; */
  }

  td > a {
    color: #111;
    background: #f2be22;
    padding: 0.6rem 2rem;
  }

  table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  th,
  td {
    padding: 15px;
    color: #f4f4f4;
    font-family: sans-serif !important;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  td button {
    padding: 10px 20px;
    background-color: transparent;
    border: 2px solid var(--main);
    color: var(--main);
    transition: 0.4s;
    cursor: pointer;
  }
  td button:hover {
    background-color: var(--main);
    color: green;
    cursor: pointer;
  }
  th {
    background-color: #f2be22;
    color: #111;
  }

  tr:hover {
    background-color: rgba(0, 0, 0, 0.1);
  }
</style>

<div class="problem-statements">
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>AN_ID</th>
        <th>CATEGORY</th>
        <th>PROBLEM STATEMENT</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

    <?php
    //parse the csv file
    $csvParser = new CSVParser($server_root.'/uploads/extras/problem_statements.csv', ['ID', 'Title', 'Bucket' ,'Category', 'Description' ]);
    $parsedData = $csvParser->parseCSV();

        //loop over all the rows
        $i = 1;
        foreach ($parsedData as $problemArray){?>
            <tr>
                <td><?= $i ?></td>
                <td data-index="130" class="event--id"><?= $problemArray['ID'] ?></td>
                <td><?= $problemArray['Bucket'] ?></td>
                <td>
                    <details>
                        <summary>
                            <?= $problemArray['Title'] ?>
                        </summary>
                        <p>
                            <?= $problemArray['Description'] ?>
                        </p>
                    </details>
                </td>
                <td>
                    <form method="get" action="">
                        <input type="hidden" name="action" value="hackathon">
                        <input type="hidden" name="problemIndex" value="<?= $i-1 ?>">
                        <input type="hidden" name="problemId" value="<?= $problemArray['ID'] ?>">
                        <button type="submit">APPLY</button>
                    </form>
                </td>
            </tr>
        <?php $i +=1;} //end for each    ?>
    </tbody>
  </table>
</div>
<?php
} //end if statement with get of ID
    else {
        //require the view to register for hackathon
        include(include_view('hackathonRegister'));
    }