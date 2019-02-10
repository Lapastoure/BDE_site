const option = {
    client: 'mysql',
    connection: {
        host: "localhost",
        user: "root",
        password: "",
        database: "bde_site"
    }
}

const knex = require('knex')(option)
const Hapi = require('hapi');

const server = Hapi.server({
    port: 3000,
    host: 'localhost',
});


server.route({
    method: "GET",
    path: "/users",
    config: {
        cors: {
            origin: ['*'],
            additionalHeaders: ['cache-control', 'x-requested-with']
        }
    },
    handler: async (request, response) => {
        var results = await knex.select('users.id', 'users.first_name', 'users.last_name', 'users.email', 'centers.label as centerslabel', 'usersstatus.label as usersstatuslabel').from('users')
            .innerJoin('centers', 'users.id_centers', 'centers.id')
            .innerJoin('usersstatus', 'users.id_usersstatus', 'usersstatus.id')
        return results;
    }
});

server.route({
    method: "GET",
    path: "/products",
    config: {
        cors: {
            origin: ['*'],
            additionalHeaders: ['cache-control', 'x-requested-with']
        }
    },
    handler: async (request, response) => {
        var results = await knex.select('products.id', 'products.label as productlabel', 'products.price', 'products.description', 'products.quantity', 'productstypes.label').from('products')
            .innerJoin('productstypes', 'products.id_productstypes', 'productstypes.id');
        return results;
    }
});

server.route({
    method: "GET",
    path: "/manifestationsReports",
    config: {
        cors: {
            origin: ['*'],
            additionalHeaders: ['cache-control', 'x-requested-with']
        }
    },
    handler: async (request, response) => {
        var results = await knex.select('usersmanifestationsreport.id', 'users.first_name', 'users.last_name', 'manifestations.label').from('usersmanifestationsreport')
            .innerJoin('users', 'usersmanifestationsreport.id_users', 'users.id')
            .innerJoin('manifestations', 'usersmanifestationsreport.id_manifestations', 'manifestations.id');
        return results;
    }
});



server.route({
    method: "GET",
    path: "/imagesReports",
    config: {
        cors: {
            origin: ['*'],
            additionalHeaders: ['cache-control', 'x-requested-with']
        }
    },
    handler: async (request, response) => {
        var results = await knex.select('usersimagesreport.id', 'users.first_name', 'users.last_name', 'images.image_url', 'manifestations.label').from('usersimagesreport')
            .innerJoin('users', 'usersimagesreport.id_users', 'users.id')
            .innerJoin('images', 'usersimagesreport.id_images', 'images.id')
            .innerJoin('manifestations', 'images.id_manifestations', 'manifestations.id');
        return results;
    }
});

server.route({
    method: "GET",
    path: "/commentsReports",
    config: {
        cors: {
            origin: ['*'],
            additionalHeaders: ['cache-control', 'x-requested-with']
        }
    },
    handler: async (request, response) => {
        var results = await knex.select('userscommentsreport.id', 'users.first_name', 'users.last_name', 'comments.description', 'images.image_url', 'manifestations.label').from('userscommentsreport')
            .innerJoin('users', 'userscommentsreport.id_users', 'users.id')
            .innerJoin('comments', 'userscommentsreport.id_comments', 'comments.id')
            .innerJoin('images', 'comments.id_images', 'images.id')
            .innerJoin('manifestations', 'images.id_manifestations', 'manifestations.id');
        return results;
    }
});


const init = async () => {

    await server.start();
    console.log(`Server running at: ${server.info.uri}`);
};

process.on('unhandledRejection', (err) => {

    console.log(err);
    process.exit(1);
});

init();