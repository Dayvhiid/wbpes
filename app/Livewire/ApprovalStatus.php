<?php
use Livewire\Component;
use App\Models\Student;

class ApprovalStatus extends Component
{
    public $studentId;
    public $chapterOneApproval;

    public function mount($studentId, $approval)
    {
        $this->studentId = $studentId;
        $this->chapterOneApproval = $approval;
    }

    public function updateApproval()
    {
        Student::where('id', $this->studentId)->update([
            'chapterOneApproval' => $this->chapterOneApproval
        ]);
    }

    public function render()
    {
        return view('livewire.approval-status');
    }
}
