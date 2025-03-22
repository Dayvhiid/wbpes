<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Evaluation Page</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div
      class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
      style="--select-button-svg: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2724px%27 height=%2724px%27 fill=%27rgb(99,117,136)%27 viewBox=%270 0 256 256%27%3e%3cpath d=%27M181.66,170.34a8,8,0,0,1,0,11.32l-48,48a8,8,0,0,1-11.32,0l-48-48a8,8,0,0,1,11.32-11.32L128,212.69l42.34-42.35A8,8,0,0,1,181.66,170.34Zm-96-84.68L128,43.31l42.34,42.35a8,8,0,0,0,11.32-11.32l-48-48a8,8,0,0,0-11.32,0l-48,48A8,8,0,0,0,85.66,85.66Z%27%3e%3c/path%3e%3c/svg%3e'); font-family: Inter, &quot;Noto Sans&quot;, sans-serif;"
    >
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] px-10 py-3">
          <div class="flex items-center gap-4 text-[#111418]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 4H42V17.3333V30.6667H24V44H6V30.6667V17.3333H24V4Z" fill="currentColor"></path>
              </svg>
            </div>
            <h2 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em]">Evaluation Page</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#f0f2f4] text-[#111418] text-sm font-bold leading-normal tracking-[0.015em]"
            >
              <span class="truncate">Help</span>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/7eca9ffe-2884-4259-97b6-9685f4138343.png");'
            ></div>
          </div>
        </header>
        <form action="{{ route('supervisor.feedbackone.save') }}" method="POST">
            @csrf
            @method('POST')    
            <input type="hidden" name="student_id" value="{{ $student->id }}">
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight min-w-72">Evaluate work</p></div>
            <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Background of the study</h3>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <select
                 name="backgroundOfStudy"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#637588] p-4 text-base font-normal leading-normal"
                >
                  <option value="one">Select an option</option>
                  <option value="meets requirements">Satisfy Requirements</option>
                  <option value="does not satisfy requirement">Does Not stisfy requirements</option>
                </select>
              </label>
            </div>
            <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Statement of the problem</h3>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <select
                name="statementOfProblem"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#637588] p-4 text-base font-normal leading-normal"
                >
                  <option value="one">Select an option</option>
                  <option value="meets requirements">Satisfy Requirements</option>
                  <option value="does not satisfy requirement">Does Not stisfy requirements</option>
                </select>
              </label>
            </div>
            <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Aims and objectives</h3>
            <div class="flex flex-wrap gap-3 p-4">
              {{-- <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#dce0e5] px-4 h-11 text-[#111418] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#1980e6] relative cursor-pointer"
              >
                Met
                <input type="radio" class="invisible absolute" name="8639b14a-4b41-4b4e-8f85-af6d10ccd946" />
              </label>
              <label
                class="text-sm font-medium leading-normal flex items-center justify-center rounded-xl border border-[#dce0e5] px-4 h-11 text-[#111418] has-[:checked]:border-[3px] has-[:checked]:px-3.5 has-[:checked]:border-[#1980e6] relative cursor-pointer"
              >
                Not Met
                <input type="radio" class="invisible absolute" name="8639b14a-4b41-4b4e-8f85-af6d10ccd946" />
              </label> --}}
              <select
                  name="aimsAndObjectives"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#637588] p-4 text-base font-normal leading-normal"
                >
                  <option value="one">Select an option</option>
                  <option value="meets requirements">Satisfy Requirements</option>
                  <option value="does not satisfy requirement">Does Not satisfy requirements</option>
                </select>
            </div>
            {{-- Here --}}
            <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Justification Of the Study</h3>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <select
                  name="justificationOfStudy"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#637588] p-4 text-base font-normal leading-normal"
                >
                  <option value="one">Select an option</option>
                  <option value="meets requirements">Satisfy Requirements</option>
                  <option value="does not satisfy requirement">Does Not satisfy requirements</option>
                </select>
              </label>
            </div>
            {{-- Here --}}
            <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Significance of the study</h3>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <select
                   name="significanceOfStudy"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#637588] p-4 text-base font-normal leading-normal"
                >
                  <option value="one">Select an option</option>
                  <option value="meets requirements">Satisfy Requirements</option>
                  <option value="does not satisfy requirement">Does Not satisfy requirements</option>
                </select>
              </label>
            </div>
            {{-- Here --}}
            <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Organization of the Project</h3>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <select
                   name="organizationOfProject"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#637588] p-4 text-base font-normal leading-normal"
                >
                  <option value="one">Select an option</option>
                  <option value="meets requirements">Satisfy Requirements</option>
                  <option value="does not satisfy requirement">Does Not satisfy requirements</option>
                </select>
              </label>
            </div>

            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <textarea
                  placeholder="Provide feedback and comments here"
                  name="feedback"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none min-h-36 placeholder:text-[#637588] p-4 text-base font-normal leading-normal"
                ></textarea>
            </form>
              </label>
            </div>

            {{-- <button class="bt-2" type="submit" >Submit</button> --}}

            <button
            type="submit"
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-blue-500 text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-blue-600"
        >
            Submit
        </button>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
