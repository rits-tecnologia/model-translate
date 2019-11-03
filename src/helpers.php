<?php

use Illuminate\Translation\Translator;

if (!function_exists('__t')) {
    /**
     * A different approach to the `trans` method.
     *
     * @param string $key
     * @param string $fallback
     * @param array $replace
     * @return mixed
     */
    function __t($key, $fallback, $replace = [])
    {
        /** @var Translator $translator */
        $translator = trans();

        if ($translator->has($key, null)) {
            return $translator->trans($key, $replace);
        }

        return $translator->trans($fallback, $replace);
    }
}

if (!function_exists('modelAction')) {
    /**
     * Get some model action by type.
     *
     * @param string $type
     * @param string $action
     * @return string
     */
    function modelAction($type, $action)
    {
        return __t(
            'models.' . $type . '.actions.' . $action,
            'models.default.actions.' . $action
        );
    }
}

if (!function_exists('modelName')) {
    /**
     * Get some model attribute by type.
     *
     * @param string $type
     * @return string
     */
    function modelName($type)
    {
        return __t(
            'models.' . $type . '.name',
            class_basename($type)
        );
    }
}

if (!function_exists('modelAttribute')) {
    /**
     * Get some model attribute by type.
     *
     * @param string $type
     * @param string $field
     * @return string
     */
    function modelAttribute($type, $field)
    {
        return __t(
            'models.' . $type . '.attributes.' . $field,
            'models.default.attributes.' . $field
        );
    }
}
