<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'title', 'summary', 'content', 'category', 'image', 'link', 'published_at'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('published_at', function (Builder $builder) {
            $builder->orderBy('published_at', 'desc');
        });
    }

    /**
     * Get the three most recent featured posts.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->limit('3');
    }

    /**
     * Get only blog posts.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBlog($query)
    {
        return $query->whereNotIn('category', ['work', 'project']);
    }

    /**
     * Get only work posts.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWork($query)
    {
        return $query->where('category', 'work');
    }

    /**
     * Get only project posts.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeProject($query)
    {
        return $query->where('category', 'project');
    }

    /**
     * Get only testimonial posts.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTestimonial($query)
    {
        return $query->where('category', 'testimonial');
    }

    /**
     * Get the first paragraph from the post content.
     *
     * @return string
     */
    public function getFirstParagraphAttribute()
    {
        $paragraphs = explode('</p>', $this->content);

        return '<p>'.strip_tags($paragraphs[0]).'</p>';
    }

    /**
     * Get a full-text version of published_at.
     *
     * @return string
     */
    public function getPublishedDateAttribute($value) {
        return \Carbon\Carbon::parse($this->published_at)->format('F j, Y');
    }

    /**
     * Get the month part of published_at.
     *
     * @return string
     */
    public function getPublishedMonthAttribute($value) {
        return \Carbon\Carbon::parse($this->published_at)->format('M');
    }

    /**
     * Get the day part of published_at
     *
     * @return string
     */
    public function getPublishedDayAttribute($value) {
        return \Carbon\Carbon::parse($this->published_at)->format('d');
    }

    /**
     * Get the year part of published_at.
     * 
     * @return string
     */
    public function getPublishedYearAttribute($value) {
        return \Carbon\Carbon::parse($this->publishded_at)->format('Y');
    }
}
