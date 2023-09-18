# Get Params
acfpro_key=$1

# Download & install plugins from WordPress.org
wp plugin install faustwp --activate
wp plugin install wordpress-seo --activate
wp plugin install redirection --activate
wp plugin install wp-graphql --activate
wp plugin install add-wpgraphql-seo --activate
wp plugin install wpgraphql-smart-cache --activate
wp plugin install add-wpgraphql-redirection --activate

# Download & install ACF Pro
if [ -z "$acfpro_key" ]
then
  # Free version if no ACF Pro key is provided
  wp plugin install advanced-custom-fields --activate
else
  # Pro version if ACF Pro key is provided
  wp plugin install "http://connect.advancedcustomfields.com/index.php?p=pro&a=download&k=${acfpro_key}" --activate
fi

# Download & install WP GraphQL Content Blocks from WP Engine Github
wp plugin install https://github.com/wpengine/wp-graphql-content-blocks/releases/latest/download/wp-graphql-content-blocks.zip --activate

# Download & install WP GraphQL for ACF from Github
wp plugin install https://github.com/wp-graphql/wp-graphql-acf/archive/master.zip --activate