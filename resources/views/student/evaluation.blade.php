<style>
    /* From Uiverse.io by Rodrypaladin */ 
.card {
  width: 250px;
  background: rgb(44, 44, 44);
  font-family: "Courier New", Courier, monospace;
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  overflow: hidden;
}

.card__title {
  color: white;
  font-weight: bold;
  padding: 5px 10px;
  border-bottom: 1px solid rgb(167, 159, 159);
  font-size: 0.95rem;
}

.card__data {
  font-size: 0.8rem;
  display: flex;
  justify-content: space-between;
  border-right: 1px solid rgb(203, 203, 203);
  border-left: 1px solid rgb(203, 203, 203);
  border-bottom: 1px solid rgb(203, 203, 203);
}

.card__right {
  width: 60%;
  border-right: 1px solid rgb(203, 203, 203);
}

.card__left {
  width: 40%;
  text-align: end;
}

.item {
  padding: 3px 0;
  background-color: white;
}

.card__right .item {
  padding-left: 0.8em;
}

.card__left .item {
  padding-right: 0.8em;
}

.item:nth-child(even) {
  background: rgb(234, 235, 234);
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>Title</tbody>
        <tbody></tbody>
    </table>


    /* From Uiverse.io by Rodrypaladin */ 
<div class="card">
  <div class="card__title">table</div>
  <div class="card__data">
    <div class="card__right">
      <div class="item">Project Supervisor</div>
      <div class="item">Project Title</div>
      <div class="item">Title Evaluation</div>
      <div class="item">Methodology Evaluation</div>
      <div class="item">Literature Review Evaluation</div>
      <div class="item">Research Question Evaluation</div>
      <div class="item">Data Collection Evaluation</div>
      <div class="item">Data Analysis Evaluation</div>
      <div class="item">Conclusion Evaluation</div>
      <div class="item">Presentation Quality Evaluation</div>
    </div>
    <div class="card__left">
      <div class="item">{{ $chapter->project_supervisor }}</div>
      <div class="item">{{ $chapter->chapter_name }}</div>
      <div class="item">{{ $chapter->title_evaluation }}</div>
      <div class="item">{{ $chapter->methodology_evaluation }}</div>
      <div class="item">{{ $chapter->literature_review_evaluation }}</div>
      <div class="item">{{ $chapter->research_question_evaluation }}</div>
      <div class="item">{{ $chapter->data_collection_evaluation }}</div>
      <div class="item">{{ $chapter->data_analysis_evaluation }}</div>
      <div class="item">{{ $chapter->conclusion_evaluation }}</div>
      <div class="item">{{ $chapter->presentation_quality_evaluation }}</div>
    </div>
  </div>
</div>

</body>
</html>