class Csapat {
    constructor(nev, varos, koltsegvetes) {
        this.nev = nev;
        this.varos = varos;
        this.koltsegvetes = koltsegvetes;
    }

    koltsegvetesModosit(value) {
        this.koltsegvetes = value;
    }
}

class SportCsapat extends Csapat {
    constructor(nev, varos, koltsegvetes, sport) {
        super(nev, varos, koltsegvetes);
        this.sport = sport;
        this.tagok = [];
    }

    tag(newMember) {
        this.tagok.push(newMember);
    }

    tagokSzama() {
        return this.tagok.length;
    }
}