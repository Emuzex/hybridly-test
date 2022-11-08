<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Attachment
 *
 * @property int $id
 * @property int $chirp_id
 * @property string $path
 * @property string|null $alt
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Chirp $chirp
 * @property-read string $url
 * @method static \Database\Factories\AttachmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereChirpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereUpdatedAt($value)
 */
	class IdeHelperAttachment {}
}

namespace App\Models{
/**
 * App\Models\Chirp
 *
 * @property int $id
 * @property string|null $body
 * @property int $author_id
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $attachments
 * @property-read int|null $attachments_count
 * @property-read \App\Models\User $author
 * @property-read \Illuminate\Database\Eloquent\Collection|Chirp[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @property-read Chirp|null $parent
 * @method static \Database\Factories\ChirpFactory factory(...$parameters)
 * @method static \App\Builders\ChirpBuilder|Chirp forHomePage()
 * @method static \App\Builders\ChirpBuilder|Chirp isLikedBy(\App\Models\User $user)
 * @method static \App\Builders\ChirpBuilder|Chirp isMain()
 * @method static \App\Builders\ChirpBuilder|Chirp newModelQuery()
 * @method static \App\Builders\ChirpBuilder|Chirp newQuery()
 * @method static \Illuminate\Database\Query\Builder|Chirp onlyTrashed()
 * @method static \App\Builders\ChirpBuilder|Chirp query()
 * @method static \App\Builders\ChirpBuilder|Chirp sortedForComments()
 * @method static \App\Builders\ChirpBuilder|Chirp whereAuthorId($value)
 * @method static \App\Builders\ChirpBuilder|Chirp whereBody($value)
 * @method static \App\Builders\ChirpBuilder|Chirp whereCreatedAt($value)
 * @method static \App\Builders\ChirpBuilder|Chirp whereDeletedAt($value)
 * @method static \App\Builders\ChirpBuilder|Chirp whereId($value)
 * @method static \App\Builders\ChirpBuilder|Chirp whereParentId($value)
 * @method static \App\Builders\ChirpBuilder|Chirp whereUpdatedAt($value)
 * @method static \App\Builders\ChirpBuilder|Chirp withLikeAndCommentCounts()
 * @method static \Illuminate\Database\Query\Builder|Chirp withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Chirp withoutTrashed()
 */
	class IdeHelperChirp {}
}

namespace App\Models{
/**
 * App\Models\Like
 *
 * @property int $id
 * @property int $user_id
 * @property int $chirp_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Chirp $chirp
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\LikeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Like newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like query()
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereChirpId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereUserId($value)
 */
	class IdeHelperLike {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $username
 * @property string|null $display_name
 * @property string $email
 * @property string|null $profile_picture_path
 * @property string|null $identity_verified_at
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Chirp[] $chirps
 * @property-read int|null $chirps_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Like[] $likes
 * @property-read int|null $likes_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdentityVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePicturePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class IdeHelperUser {}
}

