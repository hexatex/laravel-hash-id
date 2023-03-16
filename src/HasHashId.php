<?php

namespace Hexatex\LaravelHashId;

use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * Hexatex\LaravelHashId\HasHashId
 *
 * @property string $hash_id
 * @method static \Illuminate\Database\Eloquent\Builder|\Hexatex\Slug\Slug byHashId($hashId)
 */
trait HasHashId
{
	/*
     * Accessors & Mutators
     */
    /** Hash Id */
    public function hashId(): Attribute
    {
        return Attribute::get(fn () => Hashids::encode($this->attributes['id']));
    }

    /*
     * Scopes
     */
    /** Scope by hash_id */
    public function scopeByHashId(Builder $query, string $hashId): void
    {
        $query->where('id', Hashids::decode($hashId));
    }
}
