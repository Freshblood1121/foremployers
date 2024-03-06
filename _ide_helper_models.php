<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Candidate
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property float|null $experience
 * @property int $education
 * @property int|null $salary
 * @property string|null $habits
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereEducation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereExperience($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereHabits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereUpdatedAt($value)
 */
	class Candidate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

