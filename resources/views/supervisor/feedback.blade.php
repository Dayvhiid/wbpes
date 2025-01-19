<style>
    /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: linear-gradient(#F5EDF0);
}
::selection{
  color: #fff;
  background: #4671EA;
}
.wrapper{
  width: 470px;
  background: #fff;
  border-radius: 5px;
  padding: 25px 25px 30px;
  box-shadow: 8px 8px 10px rgba(0,0,0,0.06);
}
.wrapper h2{
  color: #4671EA;
  font-size: 28px;
  text-align: center;
}
.wrapper textarea{
  width: 100%;
  resize: none;
  height: 59px;
  outline: none;
  padding: 15px;
  font-size: 16px;
  margin-top: 20px;
  border-radius: 5px;
  max-height: 330px;
  caret-color: #4671EA;
  border: 1px solid #bfbfbf;
}
textarea::placeholder{
  color: #b3b3b3;
}
textarea:is(:focus, :valid){
  padding: 14px;
  border: 2px solid #4671EA;
}
textarea::-webkit-scrollbar{
  width: 0px;
}
</style>
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback For Student</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    {{-- action="{{route('supervisor.feedback.save')}}" --}}
    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        @method('POST')
    <div class="wrapper">
      <h2> Feedback for {{ $student->fullname }}</h2>
      <input type="hidden" name="student_id" value="{{ $student->id }}">
      <textarea spellcheck="false" placeholder="Type something here..." name="feedback"></textarea>  
      <button type="submit">Save</button>
    </div>

  
    {{-- </form>
    <form action="/submit-feedback" method="POST"> --}}
      <!-- CSRF Token if you're using Laravel -->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
      {{-- <h3>Feedback on Project: {{ $project->title }}</h3> --}}
    
      <!-- Title Evaluation -->
      <label for="title">Title:</label>
      <select id="title" name="title_evaluation">
        <option value="meets">Meets Expectation</option>
        <option value="does_not_meet">Does Not Meet Expectation</option>
      </select><br>
    
      <!-- Methodology Evaluation -->
      <label for="methodology">Methodology:</label>
      <select id="methodology" name="methodology_evaluation">
        <option value="meets">Meets Expectation</option>
        <option value="does_not_meet">Does Not Meet Expectation</option>
      </select><br>
    
      <!-- Literature Review Evaluation -->
      <label for="literature_review">Literature Review:</label>
      <select id="literature_review" name="literature_review_evaluation">
        <option value="meets">Meets Expectation</option>
        <option value="does_not_meet">Does Not Meet Expectation</option>
      </select><br>
    
      <!-- Research Question Evaluation -->
      <label for="research_question">Research Question:</label>
      <select id="research_question" name="research_question_evaluation">
        <option value="meets">Meets Expectation</option>
        <option value="does_not_meet">Does Not Meet Expectation</option>
      </select><br>
    
      <!-- Data Collection Evaluation -->
      <label for="data_collection">Data Collection:</label>
      <select id="data_collection" name="data_collection_evaluation">
        <option value="meets">Meets Expectation</option>
        <option value="does_not_meet">Does Not Meet Expectation</option>
      </select><br>
    
      <!-- Data Analysis Evaluation -->
      <label for="data_analysis">Data Analysis:</label>
      <select id="data_analysis" name="data_analysis_evaluation">
        <option value="meets">Meets Expectation</option>
        <option value="does_not_meet">Does Not Meet Expectation</option>
      </select><br>
    
      <!-- Conclusion Evaluation -->
      <label for="conclusion">Conclusion:</label>
      <select id="conclusion" name="conclusion_evaluation">
        <option value="meets">Meets Expectation</option>
        <option value="does_not_meet">Does Not Meet Expectation</option>
      </select><br>
    
      <!-- Overall Presentation Quality -->
      <label for="presentation_quality">Overall Presentation Quality:</label>
      <select id="presentation_quality" name="presentation_quality_evaluation">
        <option value="meets">Meets Expectation</option>
        <option value="does_not_meet">Does Not Meet Expectation</option>
      </select><br>
    
      <button type="submit">Submit Feedback</button>
    </form>
    
    
    <script>
      const textarea = document.querySelector("textarea");
      textarea.addEventListener("keyup", e =>{
        textarea.style.height = "63px";
        let scHeight = e.target.scrollHeight;
        textarea.style.height = `${scHeight}px`;
      });
    </script>
  </body>
</html>
