class Session{
    constructor(id){
        this.id = id
        this.clients = new Set
    }

    join(client){
        if(client.session){
            throw new Error('client nee')
        }
        this.clients.add(client)
        client.session = this
    }

    leave(client){
        if(client.session !== true){
            throw new Error('nee')
        }

        this.clients.delete(client)
        client.session = null
    }
}

module.exports = Session;