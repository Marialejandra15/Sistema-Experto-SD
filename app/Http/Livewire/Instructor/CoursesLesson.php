<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Lesson;
use App\Models\Plataform;
use App\Models\Section;
use Livewire\Component;

class CoursesLesson extends Component
{

    public $section, $lesson, $plataforms, $name, $plataform_id = 1, $url;

    protected $rules = [
        'lesson.name' => 'required',
        'lesson.plataform_id' => 'required',
        'lesson.url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],
    ];

    public function mount(Section $section)
    {
        $this->section = $section;
        $this->plataforms = Plataform::all();
        $this->lesson = new Lesson();
    }

    public function render()
    {
        return view('livewire.instructor.courses-lesson');
    }

    public function store(){
        $rules = [
            'name' => 'required',
            'plataform_id' => 'required',
            'url' => ['required', 'regex:%^ (?:https?://)? (?:www\.)? (?: youtu\.be/ | youtube\.com (?: /embed/ | /v/ | /watch\?v= ) ) ([\w-]{10,12}) $%x'],
        ];

        if($this->plataform_id == 2){
            $rules['url'] = ['required', 'regex:/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/'];
        }

        $this->validate($rules);

        Lesson::create([
            'name' => $this->name,
            'plataform_id' => $this->plataform_id,
            'url' => $this->url,
            'section_id' => $this->section->id
        ]);

        $this->reset(['name', 'plataform_id', 'url']);
        $this->section = Section::find($this->section->id);

    }

    public function edit(Lesson $lesson)
    {
        $this->resetValidation();
        $this->lesson = $lesson;
    }

    public function update(){
        if($this->lesson->plataform_id == 2){
            $this->rules['lesson.url'] = ['required', 'regex:/\/\/(www\.)?vimeo.com\/(\d+)($|\/)/'];
        }
        $this->validate();

        $this->lesson->save();
        $this->lesson = new Lesson();

        $this->section = Section::find($this->section->id);
    }

    public function cancel (){
        $this->lesson = new Lesson();
    }

    public function destroy(Lesson $lesson){
        $lesson->delete();
        $this->section = Section::find($this->section->id);
    }
}
