<?php

use App\Models\Employer;
use App\Models\Job;

it('it belongs to an employer', function () {
    // AAA
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act and assert
    expect ($job->employer->is($employer))->toBeTrue();
});
