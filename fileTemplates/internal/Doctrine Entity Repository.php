<?php

declare(strict_types=1);

namespace ${NAMESPACE};

use ${ENTITY_NAMESPACE}\\${ENTITY_NAME};
use Doctrine\ORM\EntityRepository;

/**
 * @method ${ENTITY_NAME}|null find(\$id, \$lockMode = null, \$lockVersion = null)
 * @method ${ENTITY_NAME}|null findOneBy(array \$criteria, array \$orderBy = null)
 * @method ${ENTITY_NAME}[] findAll()
 * @method ${ENTITY_NAME}[] findBy(array \$criteria, array \$orderBy = null, \$limit = null, \$offset = null)
 */
class ${NAME} extends EntityRepository
{
}
