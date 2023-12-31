<?php namespace October\Rain\Database;

use Illuminate\Database\Eloquent\Model as ModelBase;
use Illuminate\Database\Eloquent\Builder as BuilderBase;

/**
 * Pivot model base class
 */
class Pivot extends Model
{
    /**
     * @var \Illuminate\Database\Eloquent\Model parent model of the relationship.
     */
    protected $parent;

    /**
     * @var string foreignKey is the name of the foreign key column
     */
    protected $foreignKey;

    /**
     * @var string otherKey is the name of the "other key" column
     */
    protected $otherKey;

    /**
     * @var array guarded attributes aren't mass assignable
     */
    protected $guarded = [];

    /**
     * __construct creates a new pivot model instance
     * @param  \Illuminate\Database\Eloquent\Model  $parent
     * @param  array   $attributes
     * @param  string  $table
     * @param  bool    $exists
     * @return void
     */
    public function __construct(ModelBase $parent, $attributes, $table, $exists = false)
    {
        parent::__construct();

        // The pivot model is a "dynamic" model since we will set the tables dynamically
        // for the instance. This allows it work for any intermediate tables for the
        // many to many relationship that are defined by this developer's classes.
        $this->setRawAttributes($attributes, true);

        $this->setTable($table);

        $this->setConnection($parent->getConnectionName());

        // We store off the parent instance so we will access the timestamp column names
        // for the model, since the pivot model timestamps aren't easily configurable
        // from the developer's point of view. We can use the parents to get these.
        $this->parent = $parent;

        $this->exists = $exists;

        $this->timestamps = $this->hasTimestampAttributes();
    }

    /**
     * setKeysForSaveQuery sets the keys for a save update query
     * @param  \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function setKeysForSaveQuery(BuilderBase $query)
    {
        $query->where($this->foreignKey, $this->getAttribute($this->foreignKey));

        return $query->where($this->otherKey, $this->getAttribute($this->otherKey));
    }

    /**
     * delete the pivot model record from the database.
     * @return int
     */
    public function delete()
    {
        return $this->getDeleteQuery()->delete();
    }

    /**
     * getDeleteQuery gets the query builder for a delete operation on the pivot
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function getDeleteQuery()
    {
        $foreign = $this->getAttribute($this->foreignKey);

        $query = $this->newQuery()->where($this->foreignKey, $foreign);

        return $query->where($this->otherKey, $this->getAttribute($this->otherKey));
    }

    /**
     * getForeignKey column name
     * @return string
     */
    public function getForeignKey()
    {
        return $this->foreignKey;
    }

    /**
     * getOtherKey column name
     * @return string
     */
    public function getOtherKey()
    {
        return $this->otherKey;
    }

    /**
     * setPivotKeys sets the key names for the pivot model instance
     * @param  string  $foreignKey
     * @param  string  $otherKey
     * @return $this
     */
    public function setPivotKeys($foreignKey, $otherKey)
    {
        $this->foreignKey = $foreignKey;

        $this->otherKey = $otherKey;

        return $this;
    }

    /**
     * hasTimestampAttributes determines if the pivot model has timestamp attributes
     * @return bool
     */
    public function hasTimestampAttributes()
    {
        return array_key_exists($this->getCreatedAtColumn(), $this->attributes);
    }

    /**
     * getCreatedAtColumn gets the name of the "created at" column
     * @return string
     */
    public function getCreatedAtColumn()
    {
        return $this->parent->getCreatedAtColumn();
    }

    /**
     * getUpdatedAtColumn gets the name of the "updated at" column
     * @return string
     */
    public function getUpdatedAtColumn()
    {
        return $this->parent->getUpdatedAtColumn();
    }
}
