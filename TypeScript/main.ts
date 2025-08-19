 function getCodeEvent(message: string):Promise<any> {
    return new Promise((res, rej) => {

        if (res instanceof  Response) {

            if (rej instanceof PromiseRejectionEvent) {
                rej(message)
            }

            res(message);
        }

    });

}

async function getHovered() {

    const f = await getCodeEvent("Hello Ryan James");
    const text = document.getElementById("el") as HTMLElement;
    text.textContent = f.toString();

}

const button = document.getElementById("button");
button?.addEventListener("click", getHovered);
