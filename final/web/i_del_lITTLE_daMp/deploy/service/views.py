from flask import render_template, request
import ldap, re, sys
from wsgi import app

db = "DC=ldap,DC=ctf,DC=org"
ldap_ff = """(&
    (objectClass=inetOrgPerson)
    (sn={0})
    (uid={1})
)"""

def parse(response):
    return {

        "sn": response["sn"][0].decode(),
        "mail": response["mail"][0].decode(),
        "mobile": response["mobile"][0].decode(),
        "description": response["description"][0].decode()

    }


@app.route('/', methods=["GET", "POST"])
def index() -> str:
    if request.method == "GET":
        return render_template("auth.html")


    card_info = None
    login = request.form.get("login")
    password = request.form.get("password")

    conn = ldap.initialize("ldap://openldap/")

    try:

        ldap_filter = ldap_ff.format(login, password)
        attribs = ["sn", "mail", "mobile", "description"]
        result = conn.search_s(db, ldap.SCOPE_SUBTREE, ldap_filter, attribs)
        
        if len(result) > 0:
            card_info = parse(result[0][1])

    except Exception as exc:

        print(f"Error: {exc}")
        return render_template("error.html", message="lol!Try harder!")
      
    return render_template("index.html", card_info=card_info)
