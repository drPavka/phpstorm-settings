<?php
#parse("PHP File Header.php")

/**
 * ${NAME}.php
 *
 * @code
class ${NAME};
 * @endcode
 */
class ${NAME} extends ${PARENT_NAME} {
    /**
     * @copydoc ${PARENT_NAME}::__construct
     */
    public function __construct(${DS}name, ${DS}module, array ${DS}params = null) {
        parent::__construct(${DS}name, ${DS}module, ${DS}params);
    }
}  