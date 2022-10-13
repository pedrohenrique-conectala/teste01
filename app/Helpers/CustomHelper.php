if (!function_exists('onlyNumbers')) {
    function onlyNumbers(?string $value): ?string
    {
        if ($value === null) {
            return null;
        }
        return preg_replace('/\D/', '', $value);
    }
}
