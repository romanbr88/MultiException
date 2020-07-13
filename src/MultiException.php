<?php

namespace RomanBR\MultiException;

class MultiException extends \Exception implements \Countable
{
    protected array $errors = [];

    /**
     * Добавляет исключение в массив
     *
     * @param \Exception $e Исключение, которое необходимо добавить
     */
    public function addError(\Exception $e)
    {
        $this->errors[] = $e;
    }

    /**
     * Возвращает массив с исключениями
     *
     * @return array массив с исключениями
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    public function count()
    {
        return count($this->errors);
    }
}