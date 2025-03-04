<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Namu\WireChat\Traits\Chatable;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Collection;
use WireChat\Traits\HasConversations;

class User extends Authenticatable
{
    use HasApiTokens;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use Chatable;
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];


    public function regStudent()
    {
        return $this->hasOne(RegStudent::class);
    }





    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //Everything WireChat related

    //This allows the user to create chats
    public function canCreateChats(): bool
    {
        return true;
    }

    //This allows the user to create group chats
    public function canCreateGroups(): bool
    {
        return true;
    }

    public function getCoverUrlAttribute(): ?string
    {
      return $this->avatar_url ?? null;
    }

    /**
    * Returns the URL for the user's profile page.
    * Adjust the 'profile' route as needed for your setup.
    */
    public function getProfileUrlAttribute(): ?string
    {
      return route('profile', ['id' => $this->id]);
    }

    /**
    * Returns the display name for the user.
    * Modify this to use your preferred name field.
    */
    public function getDisplayNameAttribute(): ?string
    {
      return $this->name ?? 'user';
    }

    /**
    * Search for users when creating a new chat or adding members to a group.
    * Customize the search logic to limit results, such as restricting to friends or eligible users only.
    */
    public function searchChatables(string $query): ?Collection
    {
     $searchableFields = ['name'];
     return User::where(function ($queryBuilder) use ($searchableFields, $query) {
        foreach ($searchableFields as $field) {
                $queryBuilder->orWhere($field, 'LIKE', '%'.$query.'%');
        }
      })
        ->limit(20)
        ->get();
    }


}
