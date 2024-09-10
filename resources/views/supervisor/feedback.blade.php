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
  background: linear-gradient(#4671EA, #AC34E7);
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
    <title>Auto Resize Textarea in JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    {{-- action="{{route('supervisor.feedback.save')}}" --}}
    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        @method('POST')
    <div class="wrapper">
      <h1>Add Feedback for {{ $student->fullname }}</h1>
      <h2>Auto Resize Textarea</h2>
      <input type="hidden" name="student_id" value="{{ $student->id }}">
      <textarea spellcheck="false" placeholder="Type something here..." name="feedback"></textarea>  
      <button type="submit">Save</button>
    </div>

  
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