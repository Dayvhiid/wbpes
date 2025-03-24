<style>
  thead{
    background-color: #0267C1;
  }
  .validated{
    margin-left: -50px;
  }
</style>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
    <div
      class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden"
      style="--checkbox-tick-svg: url('data:image/svg+xml,%3csvg viewBox=%270 0 16 16%27 fill=%27rgb(248,250,252)%27 xmlns=%27http://www.w3.org/2000/svg%27%3e%3cpath d=%27M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z%27/%3e%3c/svg%3e'); font-family: Inter, &quot;Noto Sans&quot;, sans-serif;"
    >
      <div class="layout-container flex h-full grow flex-col">
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7edf3] px-10 py-3">
          <div class="flex items-center gap-4 text-[#0e141b]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z"
                  fill="currentColor"
                ></path>
              </svg>
            </div>
            <h2 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em]">Babcock University</h2>
          </div>
          <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
              <a class="text-[#0e141b] text-sm font-medium leading-normal" href="#">Dashboard</a>
              <a class="text-[#0e141b] text-sm font-medium leading-normal" href="#">Projects</a>
              {{-- <a class="text-[#0e141b] text-sm font-medium leading-normal" href="#">Evaluators</a>
              <a class="text-[#0e141b] text-sm font-medium leading-normal" href="#">Settings</a> --}}
              <a class="text-[#0e141b] text-sm font-medium leading-normal" href="/group-students">Group Students</a>
            </div>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-[#e7edf3] text-[#0e141b] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5"
            >
              <div class="text-[#0e141b]" data-icon="Question" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M140,180a12,12,0,1,1-12-12A12,12,0,0,1,140,180ZM128,72c-22.06,0-40,16.15-40,36v4a8,8,0,0,0,16,0v-4c0-11,10.77-20,24-20s24,9,24,20-10.77,20-24,20a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-.72c18.24-3.35,32-17.9,32-35.28C168,88.15,150.06,72,128,72Zm104,56A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"
                  ></path>
                </svg>
              </div>
            </button>
            <div
              class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/4321a8ce-0731-4565-a405-6463e755081b.png");'
            ></div>
          </div>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <p class="text-[#0e141b] tracking-light text-[32px] font-bold leading-tight min-w-72">Project validation and evaluator assignment</p>
            </div>
            <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Project validation</h3>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-xl border border-[#d0dbe7] bg-slate-50">
                <table class="flex-1">
                  <thead class="table_head">
                    <tr class="bg-slate-50">
                      <th class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-120 px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">Project</th>
                      <th class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-240 px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">User</th>
                      <th class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-360 px-4 py-3 text-left text-[#0e141b] w-[400px] text-sm font-medium leading-normal">
                        Submitted
                      </th>
                      <th
                        class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-480 px-4 py-3 text-left text-[#0e141b] w-60 text-[#4e7397] text-sm font-medium leading-normal"
                      ></th>
                    </tr>
                  </thead>
                  {{-- <tbody>
                    <tr class="border-t border-t-[#d0dbe7]">
                      <td class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e141b] text-sm font-normal leading-normal">
                        {{$student->chapter_name}}
                      </td>
                      <td class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7397] text-sm font-normal leading-normal">Sophie C</td>
                      <td class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7397] text-sm font-normal leading-normal">
                        2 days ago
                      </td>
                      <td class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-480 h-[72px] px-4 py-2 w-60 text-[#4e7397] text-sm font-bold leading-normal tracking-[0.015em]">
                        View details
                      </td>
                    </tr>
                  </tbody> --}}
                  <tbody>
                    @foreach($students as $student)
                        <tr class="border-t border-t-[#d0dbe7]">
                            <td class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0e141b] text-sm font-normal leading-normal">
                                {{$student->chapter_name}}
                            </td>
                            <td class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-240 h-[72px] px-4 py-2 w-[400px] text-[#4e7397] text-sm font-normal leading-normal">
                                {{$student->fullname}}
                            </td>
                            <td class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-360 h-[72px] px-4 py-2 w-[400px] text-[#4e7397] text-sm font-normal leading-normal">
                                {{$student->created_at->diffForHumans()}}
                            </td>
                            <td class="table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-480 h-[72px] px-4 py-2 w-60 text-[#4e7397] text-sm font-bold leading-normal tracking-[0.015em]">
                                {{-- <a href="">View details</a> --}}
                                {{-- <input
                                type="checkbox"
                                class="h-5 w-5 rounded border-[#d0dbe7] border-2 bg-transparent text-[#1980e6] checked:bg-[#1980e6] checked:border-[#1980e6] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#d0dbe7] focus:outline-none"
                                checked=""
                              /> --}}
                              {{-- <form action="{{route('update.project.status')}}" action="POST">
                                <p class="text-[#0e141b] text-base font-normal leading-normal" value="validated" >Validate Project</p>
                                </form>                     --}}
                                {{-- <td class="validated"> --}}
                                  {{-- <form action="{{route('update.project.status')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                    <input type="hidden" name="status" value="validated">
                                    <button type="submit" class="text-[#0e141b]  font-normal leading-normal">Validate Project</button>
                                  </form> --}}
                                  {{-- <form action="{{route('update.project.status')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                    <input type="hidden" name="status" value="validated">
                                    <button type="submit" class="text-[#0e141b] font-normal leading-normal">Validate Project</button>
                                </form> --}}
                                <button type="submit" class="bg-[#1d4ed8] text-white font-medium px-4 py-2 rounded-lg shadow-md hover:bg-[#1e40af] transition duration-300"  onclick="validateProject()">
                                  Validate Project
                  
                                </button>
                                
                                  {{-- <input
                                      type="checkbox"
                                      value="Validated"
                                      class="validate-checkbox h-5 w-5 rounded border-[#d0dbe7] border-2 bg-transparent text-[#1980e6] checked:bg-[#1980e6] checked:border-[#1980e6] focus:ring-0 focus:outline-none"
                                  />
                                  <p class="text-[#0e141b] text-base font-normal leading-normal">Validate Project</p> --}}
                              </td>
                              
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-120{display: none;}}
                @container(max-width:240px){.table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-240{display: none;}}
                @container(max-width:360px){.table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-360{display: none;}}
                @container(max-width:480px){.table-85df6e5f-798f-4a7b-b9c6-d1ae1dc0fabe-column-480{display: none;}}
              </style>
            </div>
            <h3 class="text-[#0e141b] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Evaluator assignment</h3>
            <div class="flex items-center gap-4 bg-slate-50 px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div
                  class="text-[#0e141b] flex items-center justify-center rounded-lg bg-[#e7edf3] shrink-0 size-12"
                  data-icon="FolderSimple"
                  data-size="24px"
                  data-weight="regular"
                >
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M216,72H130.67L102.93,51.2a16.12,16.12,0,0,0-9.6-3.2H40A16,16,0,0,0,24,64V200a16,16,0,0,0,16,16H216.89A15.13,15.13,0,0,0,232,200.89V88A16,16,0,0,0,216,72Zm0,128H40V64H93.33l27.74,20.8a16.12,16.12,0,0,0,9.6,3.2H216Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#0e141b] text-base font-medium leading-normal line-clamp-1"></p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal line-clamp-2"></p>
                </div>
              </div>
              <div class="shrink-0">
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#e7edf3] text-[#0e141b] text-sm font-medium leading-normal w-fit"
                >
                  <span class="truncate">Assign</span>
                </button>
              </div>
            </div>
            <div class="flex items-center gap-4 bg-slate-50 px-4 min-h-[72px] py-2 justify-between">
              <div class="flex items-center gap-4">
                <div class="text-[#0e141b] flex items-center justify-center rounded-lg bg-[#e7edf3] shrink-0 size-12" data-icon="Users" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col justify-center">
                  <p class="text-[#0e141b] text-base font-medium leading-normal line-clamp-1">Evaluator</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal line-clamp-2">Dr Maitanmi</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal line-clamp-2">Dr Mensah</p>
                  <p class="text-[#4e7397] text-sm font-normal leading-normal line-clamp-2">Dr Adegboola</p>
                </div>
              </div>
              <div class="shrink-0">
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#e7edf3] text-[#0e141b] text-sm font-medium leading-normal w-fit"
                >
                  <span class="truncate">Unassign</span>
                </button>
              </div>
            </div>
            <div class="px-4">
              {{-- <label class="flex gap-x-3 py-3 flex-row">
                <input
                  type="checkbox"
                  class="h-5 w-5 rounded border-[#d0dbe7] border-2 bg-transparent text-[#1980e6] checked:bg-[#1980e6] checked:border-[#1980e6] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#d0dbe7] focus:outline-none"
                  checked=""
                />
                {{-- <p class="text-[#0e141b] text-base font-normal leading-normal">Notify evaluators of new assignments</p> --}}
              </label> 
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script>
  function validateProject() {
    // Change button text to "Validating..."
    const button = event.target;
    button.innerText = "Validating...";
    button.disabled = true; // Prevent multiple clicks

    setTimeout(() => {
      alert('Project Validated Successfully');
      button.innerText = "Validate Project"; // Restore button text
      button.disabled = false;
    }, 750); // 750ms delay
  }
</script>