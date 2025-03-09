<style>
  /* From Uiverse.io by 3bdel3ziz-T */ 
.select {
  width: fit-content;
  cursor: pointer;
  position: relative;
  transition: 300ms;
  color: white;
  overflow: hidden;
}

.selected {
  background-color: #2a2f3b;
  padding: 5px;
  margin-bottom: 3px;
  border-radius: 5px;
  position: relative;
  z-index: 100000;
  font-size: 15px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.arrow {
  position: relative;
  right: 0px;
  height: 10px;
  transform: rotate(-90deg);
  width: 25px;
  fill: white;
  z-index: 100000;
  transition: 300ms;
}

.options {
  display: flex;
  flex-direction: column;
  border-radius: 5px;
  padding: 5px;
  background-color: #2a2f3b;
  position: relative;
  top: -100px;
  opacity: 0;
  transition: 300ms;
}

.select:hover > .options {
  opacity: 1;
  top: 0;
}

.select:hover > .selected .arrow {
  transform: rotate(0deg);
}

.option {
  border-radius: 5px;
  padding: 5px;
  transition: 300ms;
  background-color: #2a2f3b;
  width: 150px;
  font-size: 15px;
}
.option:hover {
  background-color: #323741;
}

.options input[type="radio"] {
  display: none;
}

.options label {
  display: inline-block;
}
.options label::before {
  content: attr(data-txt);
}

.options input[type="radio"]:checked + label {
  display: none;
}

.options input[type="radio"]#all:checked + label {
  display: none;
}

.select:has(.options input[type="radio"]#all:checked) .selected::before {
  content: attr(data-default);
}
.select:has(.options input[type="radio"]#option-1:checked) .selected::before {
  content: attr(data-one);
}
.select:has(.options input[type="radio"]#option-2:checked) .selected::before {
  content: attr(data-two);
}
.select:has(.options input[type="radio"]#option-3:checked) .selected::before {
  content: attr(data-three);
}


</style>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Lexend%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Student Welcome</title>
    @notifyCss
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: Lexend, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7edf3] px-10 py-3">
          <div class="flex items-center gap-8">
            <div class="flex items-center gap-4 text-[#0e141b]">
              <div class="size-4">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_6_330)">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M24 0.757355L47.2426 24L24 47.2426L0.757355 24L24 0.757355ZM21 35.7574V12.2426L9.24264 24L21 35.7574Z"
                      fill="currentColor"
                    ></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_6_330"><rect width="48" height="48" fill="white"></rect></clipPath>
                  </defs>
                </svg>
              </div>
              <h2 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em]">Academic Insights</h2>
            </div>
            <label class="flex flex-col min-w-40 !h-10 max-w-64">
              <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                <div
                  class="text-[#4e7397] flex border-none bg-[#e7edf3] items-center justify-center pl-4 rounded-l-xl border-r-0"
                  data-icon="MagnifyingGlass"
                  data-size="24px"
                  data-weight="regular"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                    ></path>
                  </svg>
                </div>
                <input
                  placeholder="Search"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#0e141b] focus:outline-0 focus:ring-0 border-none bg-[#e7edf3] focus:border-none h-full placeholder:text-[#4e7397] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                  value=""
                />
              </div>
            </label>
          </div>


          <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1980e6] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]"
          >
          <a href="{{route('student.profile')}}">Profile</a>
          </button>
          <button
          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1980e6] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]"
          >
         <a href="{{route('student.chapter')}}">Project</a>
          </button>
          <button
          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1980e6] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]"
          >
         <a href="{{route('student.projectList')}}">Project List</a>
        </button>
        <button
        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1980e6] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]"
        >
       <a href="/chats">CHAT</a>
      </button>

      <button
      class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#1980e6] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]"
      >
     <a href="/studentDataForm">Student Data</a>
    </button>

      @notifyJs
         
      {{-- <div class="dd">
        <div class="select">
          <div
            class="selected"
            data-default="Messaging"
            data-one="option-1"
            data-two="option-2"
            data-three="option-3"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="1em"
              viewBox="0 0 512 512"
              class="arrow"
            >
              <path
                d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"
              ></path>
            </svg>
          </div>
          <div class="options">
            <div title="all">
              <input id="all" name="option" type="radio" checked="" />
              <label class="option" for="all" data-txt="Messaging"></label>
            </div>
            <div title="option-1">
              <input id="option-1" name="option" type="radio" />
              <a class="option" href="{{route('login')}} ">lOGIN</a>
            </div>
            <div title="option-2">
              <input id="option-2" name="option" type="radio" />
              <a class="option" href="{{route('register')}} ">REGISTER</a>
            </div>
          </div>
        </div>
      </div> --}}
        

         
        </header>
       
        {{-- <a href="{{route('student.chapter')}}">Project</a> --}}
        {{-- <a href="{{route('student.projectList')}}">Project</a> --}}
        <div class="px-40 flex flex-1 justify-center py-4">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <h3 class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight px-4 text-left pb-2 pt-5">Welcome, {{ $student->fullname }}</h3>
            <p class="text-[#0e141b] text-base font-normal leading-normal pb-3 pt-1 px-4">
              You're all set.
            </p>
            <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Recommended for you</h3>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/ed8cb0b1-be1f-4619-8c69-c6b5132b0598.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">Chatting</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal">Get in touch with your supervisor </p>
                </div>
              </div>
              {{-- <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/077546e6-0088-4ec1-93f1-e9aa97745be2.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">Study Guide</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal">Physical Science - Matter &amp; Energy</p>
                </div>
              </div> --}}
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/84206141-7ff2-4515-8477-71e93d788bfc.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">Projects Submitions</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal">Keep track of your submitions</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/0e04cb42-94c7-417f-8afc-81857983e1a2.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">Supervisor Feedback</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal">Get timely feedback on your project submitions</p>
                </div>
              </div>
            {{-- </div>
            <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">From your classmates</h3> --}}
            {{-- <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/84206141-7ff2-4515-8477-71e93d788bfc.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">Flashcards</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal">Physical Science - Matter &amp; Energy</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/1fc607b2-2105-4de4-8c23-b69d3b7cb675.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">Study Guide</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal">Physical Science - Matter &amp; Energy</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://cdn.usegalileo.ai/stability/25517f97-7c89-458e-b6ab-a65f588b38fb.png");'
                ></div>
                <div>
                  <p class="text-[#0e141b] text-base font-medium leading-normal">Flashcards</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal">Physical Science - Matter &amp; Energy</p>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
